<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Validator;
use App\Models\user_info;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
            $validator = Validator::make(request()->all(), [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'profile_pic' => 'required',
            'user_type' => 'required',
            ]);

            $requestData = request()->all();
            $filename = time().request()->file('profile_pic')->getClientOriginalName();
            $path = request()->file('profile_pic')->move('storage/images',$filename);
            $requestData["profile_pic"] = $path;
            user_info::create($requestData);

            $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_ID' => 'required',
            ]);

            $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_ID' => $requestData["user_ID"],
            ]);

            event(new Registered($user));

            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);

    }//end of register
}
