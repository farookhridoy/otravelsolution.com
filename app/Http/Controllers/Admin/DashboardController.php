<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Models\Booking;
use App\Models\WeddingBooking;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Index');
    }

    public function booking_list()
    {   
        return Inertia::render('Dashboard/Booking',[
            'booking_data'=>Booking::where('type','booking')->paginate(10),
            'pageTitle'=>'Booking List',
        ]);
    }
    public function airport_list()
    {
        return Inertia::render('Dashboard/Airport',[
            'airport_data'=>Booking::where('type','airport')->paginate(10),
            'pageTitle'=>'Airport Booking List',
        ]);
    }

    public function wedding_list()
    {
        return Inertia::render('Dashboard/Weeding',[
            'wedding_data'=>WeddingBooking::where('status','active')->paginate(10),
            'pageTitle'=>'Wedding Booking List',
        ]);
    }
}
