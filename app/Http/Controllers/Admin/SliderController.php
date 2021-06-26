<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Image;
use File;
use Str;
use DB;

class SliderController extends Controller
{   
    protected $slider_image_path;
    protected $slider_image_relative_path;
     /**
     * generalController constructor.
     */
    public function __construct()
    {
        $this->slider_image_path = public_path('uploads/slider');
        $this->slider_image_relative_path = '/uploads/slider';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return Inertia::render('Slider/Index', [
            'slider' => Slider::orderBy('title')
            ->where('status','active')
            ->paginate()
        ]);
    }

    public function create()
    {
        return Inertia::render('Slider/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required','max:100'],
            'status' => ['required'],
            'short_order' => ['required'],
            'image_link' => ['nullable', 'image', 'max:1024'],
        ])->validate();

        $input=$request->all();

        $input['slug']=Str::slug($input['title']);
       
        $model=Slider::where('slug',$input['slug'])->exists();

        if(!$model){

            $slider_image = $request->image_link;
            if($slider_image) {

                $slider_image_title = str_replace(' ', '-', $input['slug'] . '.' . $slider_image->getClientOriginalExtension());
                $slider_image_link = $this->slider_image_relative_path.'/'.$slider_image_title;
                Image::make($request->image_link)->save(public_path($slider_image_link));
                $request->merge(['image_link' => $slider_image_title]);
            }else{
                $slider_image_link = '';
                $slider_image_title = '';
            }

            $input['image_link'] = $slider_image_title;

            if($category_data = Slider::create($input)){
                return Redirect::route('slider')->with('success', 'Slider created.');
            }

        }else{

            return Redirect::route('slider')->with('error', 'Slider Already Created.');
        }
    }

    public function edit($id)
    {
        return Inertia::render('Slider/Edit', [
            'slider' => Slider::where('id',$id)->first(),
            'status'=>['active','inactive','cancel']
        ]);
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
       Validator::make($request->all(), [
            'title' => ['required','max:100'],
            'status' => ['required'],
            'short_order' => ['required'],
            'image_link' => ['nullable', 'image', 'max:1024'],
        ])->validate();

        $model=Slider::find($id);
        $input=$request->all();
        $input['slug']=Str::slug($input['title']);

        if($model){

            $slider_image = $request->image_link;
                if($slider_image) {
                    $slider_image_title = str_replace(' ', '-', $input['slug'] . '.' . $slider_image->getClientOriginalExtension());
                    $slider_image_link = $this->slider_image_relative_path.'/'.$slider_image_title;
                    Image::make($request->image_link)->save(public_path($slider_image_link));
                    $request->merge(['image_link' => $slider_image_title]);
                   
                }else{
                    $slider_image_link = $model->image_link;
                    $slider_image_title = $model->image_link;
                }

                $input['image_link'] = $slider_image_title;

                if($slider_data = $model->update($input)){

                    if($slider_image != null){
                        File::Delete($model->image_link);
                        $slider_image->move($this->slider_image_path, $slider_image_title);
                    }
                    return Redirect::route('slider')->with('success', 'Slider Updated Successfully.');
                }
        }else{
            return Redirect::route('slider')->with('error', 'Slider Not Found');
        }
    }

    public function destroy(Request $request, $id)
    {
        $model=Slider::find($id)->first();

        DB::beginTransaction();
        try {
            // Category update
            if($model->status =='active'){
                $model->status = 'cancel';
            }else{
                $model->status = 'active';
            }

            $model->save();

            DB::commit();

            return Redirect::back()->with('success', 'Slider deleted.');

        } catch(\Exception $e) {
            DB::rollback();
            return Redirect::back()->with('success', $e->getMessage());
        }

        return Redirect::back()->with('success', 'Slider deleted.');
    }

    public function restore()
    {
       
    }
}
