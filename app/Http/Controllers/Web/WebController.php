<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\GeneralPages;
use App\Models\Subscription;
use Image;
use File;
use Str;
use DB;

class WebController extends Controller
{
    public function index(){

        $pageTitle="Welcome to otravelsolution.com";

        $slider=Slider::where('status','active')->limit(3)->get();
        $aboutUs=GeneralPages::where('slug','about-us')->first();

        return view('web.home.index',compact('slider','pageTitle','aboutUs'));
    }
}
