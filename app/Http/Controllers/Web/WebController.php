<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\GeneralPages;
use App\Models\Subscription;
use Image;
use File;
use Str;
use DB;
use Session;

class WebController extends Controller
{
    public function index(){

        $pageTitle="Welcome to otravelsolution.com";

        $slider=Slider::where('status','active')->limit(3)->get();
        $aboutUs=GeneralPages::where('slug','about-us')->first();

        return view('web.home.index',compact('slider','pageTitle','aboutUs'));
    }

    public function store(Request $request){

        Validator::make($request->all(), [
            'first_name' => ['required','max:100'],
            'email' => ['required','email','max:50'],
            'phone' => ['required','max:32'],
            'address' => ['required'],
            'message' => ['required'],
        ])->validate();

        $input = $request->all();
        if($input)
        {
            DB::beginTransaction();
            try {

                $model=Contact::create([
                    'account_id' => $input['account_id'],
                    'first_name' => $input['first_name'],
                    'last_name' => 'User',
                    'email' => $input['email'],
                    'phone' => $input['phone'],
                    'address' => $input['address'],
                    'message' => $input['message'],
                ]);

                $send_to="contact@otravelsolution.com";

                if(isset($input['email'])){

                    $mail_body = \Illuminate\Support\Facades\View::make('web.emailBody.contact', ['data'=> $input]);
                    $contents = $mail_body->render();
                    $send_mail = \App\Http\Helpers\SendMail::fire($send_to, 'Get In Touch Mail', $contents, '');
                }else{
                    Session::flash('danger', "email incorrect.");
                }
                DB::commit();
                Session::flash('message', 'Thanks for your message.We will contact you very soon');
                return redirect()->back();
            } 
            catch(\Exception $e) {
                DB::rollback();
                return Redirect::back()->with('danger', $e->getMessage());
            }
        }
    }


}
