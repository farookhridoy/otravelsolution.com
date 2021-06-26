<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Image;
use File;
use Str;
use DB;

class UsersController extends Controller
{   
    
    protected $user_image_path;
    protected $user_image_relative_path;
     /**
     * generalController constructor.
     */
    public function __construct()
    {
        $this->user_image_path = public_path('uploads/user');
        $this->user_image_relative_path = '/uploads/user';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return Inertia::render('Users/Index', [
            'filters' => Request::all('search', 'role', 'trashed'),
            'users' => Auth::user()->account->users()
                ->orderByName()
                ->filter(Request::only('search', 'role', 'trashed'))
                ->get()
                ->transform(function ($user) {
                    return [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'owner' => $user->owner,
                        'photo' => $user->photo_path,
                        'deleted_at' => $user->deleted_at,
                    ];
                }),
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store()
    {
        Request::validate([
            'first_name' => ['required', 'max:50'],
            'last_name' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email', Rule::unique('users')],
            'password' => ['nullable'],
            'owner' => ['required', 'boolean'],
            'photo' => ['nullable', 'image'],
        ]);

        $input=Request::all();

        $user_image = Request::file('photo');
        if($user_image) {

            $user_image_title = str_replace(' ', '-', $input['email'] . '.' . $user_image->getClientOriginalExtension());
            $user_image_link = $this->user_image_relative_path.'/'.$user_image_title;
            Image::make($input['photo'])->save(public_path($user_image_link));
            Request::merge(['photo' => $user_image_title]);
        }else{
            $user_image_link = '';
            $user_image_title = '';
        }

        $input['photo'] = $user_image_title;

        Auth::user()->account->users()->create([
            'first_name' => Request::get('first_name'),
            'last_name' => Request::get('last_name'),
            'email' => Request::get('email'),
            'password' => Request::get('password'),
            'owner' => Request::get('owner'),
            'photo_path' => Request::file('photo') ? $input['photo'] : null,
        ]);

        return Redirect::route('users')->with('success', 'User created.');
    }

    public function edit(User $user)
    {
        return Inertia::render('Users/Edit', [
            'user' => [
                'id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'owner' => $user->owner,
                'photo' => $user->photo_path,
                'deleted_at' => $user->deleted_at,
            ],
        ]);
    }

    public function update(User $user)
    {
        if (App::environment('demo') && $user->isDemoUser()) {
            return Redirect::back()->with('error', 'Updating the demo user is not allowed.');
        }

        Request::validate([
            'first_name' => ['required', 'max:50'],
            'last_name' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable'],
            'owner' => ['required', 'boolean'],
            'photo' => ['nullable', 'image'],
        ]);

        $user->update(Request::only('first_name', 'last_name', 'email', 'owner'));

        if (Request::file('photo')) {

            $input=Request::all();

            $user_image = $input['photo'];
            if($user_image) {

                $user_image_title = str_replace(' ', '-', $input['email'] . '.' . $user_image->getClientOriginalExtension());
                $user_image_link = $this->user_image_relative_path.'/'.$user_image_title;
                Image::make($input['photo'])->save(public_path($user_image_link));
                Request::merge(['photo' => $user_image_title]);
            }else{
                $user_image_link = $user->photo_path;
                $user_image_title = $user->photo_path;
            }

            $input['photo'] = $user_image_title;

            $user->update(['photo_path' => $input['photo']]);

            if($user_image != null){
                File::Delete($user->photo_path);
                $user_image->move($this->user_image_path, $user_image_title);
            }
        }

        if (Request::get('password')) {
            $user->update(['password' => Request::get('password')]);
        }

        return Redirect::back()->with('success', 'User updated.');
    }

    public function destroy(User $user)
    {
        if (App::environment('demo') && $user->isDemoUser()) {
            return Redirect::back()->with('error', 'Deleting the demo user is not allowed.');
        }

        $user->delete();

        return Redirect::back()->with('success', 'User deleted.');
    }

    public function restore(User $user)
    {
        $user->restore();

        return Redirect::back()->with('success', 'User restored.');
    }
}
