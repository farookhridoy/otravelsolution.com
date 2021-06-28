<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Booking extends Model
{
      protected $table='bookings';
      
      protected $fillable = [
        'name',
        'email',
        'phone',
        'type',
        'pickup_date',
        'pickup_time',
        'pickup',
        'dropoff',
        'flight_details',
        'return_journey',
        'return_date',
        'return_time',
        'no_of_passengers',
        'vehicle_type',
        'paymnet_type',
        'driver_note',
        'status',
    ];

        // TODO :: boot
        // boot() function used to insert logged user_id at 'created_by' & 'updated_by'
    public static function boot(){
        parent::boot();
        static::creating(function($query){
            if(Auth::check()){
                $query->created_by = @\Auth::user()->id;
            }
        });
        static::updating(function($query){
            if(Auth::check()){
                $query->updated_by = @\Auth::user()->id;
            }
        });
    }
}
