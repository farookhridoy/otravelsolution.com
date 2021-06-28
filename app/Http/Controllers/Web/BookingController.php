<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Image;
use File;
use Str;
use DB;
use Session;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle="Booking";

        return view('web.pages.booking',compact('pageTitle'));
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
            'name' => ['required','max:100'],
            'email' => ['required','email','max:50'],
            'phone' => ['required','max:32'],
            'vehicle_type' => ['required'],
            'pickup' => ['required'],
            'dropoff' => ['required'],
            'pickup_date' => ['required'],
            'no_of_passengers' => ['required'],
        ])->validate();

        $input = $request->all();
        if($input)
        {
            DB::beginTransaction();
            try {

                $model=Booking::create($input);

                $send_to="gmfaruk2021@gmail.com";

                if(isset($input['email'])){

                    $mail_body = \Illuminate\Support\Facades\View::make('web.emailBody.booking', ['data'=> $input]);
                    $contents = $mail_body->render();
                    $send_mail = \App\Http\Helpers\SendMail::fire($send_to, 'Car booking email', $contents, '');
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
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
