<?php

namespace App\Http\Controllers;

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


class adminController extends Controller
{
    //for viewing the userAccounts
    public function adminDashboard()
    {
        $userInfo = user_info::all();
        return view ('adminView.adminDashboard')->with('userInfo', $userInfo);
    }

    public function addUser()
    {
        return view ('adminView.addUser');
    }

    //for storing userInformation And Register
    public function storeUserInfo(Request $request)
    {
        $validator = Validator::make(request()->all(), [
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'profile_pic' => 'required',
        'user_type' => 'required',
        'email' => 'required',
        'password' => 'required',
        ]);
    
        if($validator->fails())
        {
        return back()->withErrors($validator)->withInput()->with('Error','Something went wrong. Please try again.');
        }
        else
        {
                $requestData = request()->all();
                $filename = time().request()->file('profile_pic')->getClientOriginalName();
                $path = request()->file('profile_pic')->move('storage/images',$filename);
                $requestData["profile_pic"] = $path;
                user_info::create($requestData);
                $requestData["user_ID"] = $user_ID;

                $requestDataUser = request()->all();
                $requestDataUser["user_ID"] =  $user_ID;
                User::create($requestDataUser);
                $userInfo = user_info::all();
                return view ('adminView.adminDashboard')->with('userInfo', $userInfo);
                
        }
    }//end of adding userInformation
}
