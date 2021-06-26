<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralPages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Image;
use File;
use Str;
use DB;

class GeneralPagesController extends Controller
{   
    protected $general_image_path;
    protected $general_image_relative_path;
     /**
     * generalController constructor.
     */
    public function __construct()
    {
        $this->general_image_path = public_path('uploads/generalPhoto');
        $this->general_image_relative_path = '/uploads/generalPhoto';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return Inertia::render('GeneralPages/Index', [

            'generalpages' => GeneralPages::orderBy('title')
            ->where('status','active')
            ->paginate()
        ]);
    }

    public function create()
    {
        return Inertia::render('GeneralPages/Create');
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
            'description' => ['required'],
            'status' => ['required'],
            'image_link' => ['nullable', 'image', 'max:1024'],
        ])->validate();

        $input=$request->all();

        $input['slug']=Str::slug($input['title']);
       
        $model=GeneralPages::where('slug',$input['slug'])->exists();

        if(!$model){

            $general_image = $request->image_link;
            if($general_image) {

                $general_image_title = str_replace(' ', '-', $input['slug'] . '.' . $general_image->getClientOriginalExtension());
                $general_image_link = $this->general_image_relative_path.'/'.$general_image_title;
                Image::make($request->image_link)->save(public_path($general_image_link));
                $request->merge(['image_link' => $general_image_title]);
            }else{
                $general_image_link = '';
                $general_image_title = '';
            }

            $input['image_link'] = $general_image_title;

            if($category_data = GeneralPages::create($input)){
                return Redirect::route('generalpages')->with('success', 'General Pages created.');
            }

        }else{

            return Redirect::route('generalpages')->with('error', 'General Pages Already Created.');
        }
    }

    public function edit($id)
    {
        return Inertia::render('GeneralPages/Edit', [
            'generalpages' => GeneralPages::where('id',$id)->first(),
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
            'description' => ['required'],
            'status' => ['required'],
            'image_link' => ['nullable', 'image', 'max:1024'],
        ])->validate();

        $model=GeneralPages::find($id);
        $input=$request->all();
        $input['slug']=Str::slug($input['title']);

        if($model){

            $general_image = $request->image_link;
                if($general_image) {
                    $general_image_title = str_replace(' ', '-', $input['slug'] . '.' . $general_image->getClientOriginalExtension());
                    $general_image_link = $this->general_image_relative_path.'/'.$general_image_title;
                    Image::make($request->image_link)->save(public_path($general_image_link));
                    $request->merge(['image_link' => $general_image_title]);
                   
                }else{
                    $general_image_link = $model->image_link;
                    $general_image_title = $model->image_link;
                }

                $input['image_link'] = $general_image_title;

                if($general_data = $model->update($input)){

                    if($general_image != null){
                        File::Delete($model->image_link);
                        $general_image->move($this->general_image_path, $general_image_title);
                    }
                    return Redirect::route('generalpages')->with('success', 'General Pages Updated Successfully.');
                }
        }else{
            return Redirect::route('generalpages')->with('error', 'General Pages Not Found');
        }
    }

    public function destroy(Request $request, $id)
    {
        $model=GeneralPages::find($id)->first();

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

            return Redirect::back()->with('success', 'General pages deleted.');

        } catch(\Exception $e) {
            DB::rollback();
            return Redirect::back()->with('success', $e->getMessage());
        }

        return Redirect::back()->with('success', 'General pages deleted.');
    }

    public function restore()
    {
       
    }
}
