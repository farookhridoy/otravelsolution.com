<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralPages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class GeneralPagesController extends Controller
{
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

    public function store()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
       
    }

    public function destroy()
    {
        
    }

    public function restore()
    {
       
    }
}
