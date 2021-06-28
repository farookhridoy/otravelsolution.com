<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\WeddingBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Image;
use File;
use Str;
use DB;
use Session;

class WeddingBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle="Weeding Booking";

        return view('web.pages.wedding_booking',compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'first_name' => ['required','max:100'],
            'last_name' => ['required','max:100'],
            'email' => ['required','email','max:50'],
            'phone' => ['required','max:32'],
            'booking_date' => ['required','max:32'],
            'vehicle_type' => ['required'],
        ])->validate();

        $input = $request->all();
        if($input)
        {
            DB::beginTransaction();
            try {

                $model=WeddingBooking::create($input);

                $send_to="weeding@otravelsolution.com";

                if(isset($input['email'])){

                    $mail_body = \Illuminate\Support\Facades\View::make('web.emailBody.weedingbooking', ['data'=> $input]);
                    $contents = $mail_body->render();
                    $send_mail = \App\Http\Helpers\SendMail::fire($send_to, 'Weeding booking email', $contents, '');
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeddingBooking  $weddingBooking
     * @return \Illuminate\Http\Response
     */
    public function show(WeddingBooking $weddingBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeddingBooking  $weddingBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(WeddingBooking $weddingBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WeddingBooking  $weddingBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeddingBooking $weddingBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeddingBooking  $weddingBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeddingBooking $weddingBooking)
    {
        //
    }
}
