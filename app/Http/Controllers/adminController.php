<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
use DB;


class adminController extends Controller
{
    //for viewing the userAccounts
    public function adminDashboard()
    {
        $user = User::all();
        return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $user);
    }//end viewing of admin user accounts dashboard

    public function adminAccounts()
    {
        $userAdmin = User::where('user_type','Admin')->get();
        return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $userAdmin);
    }//end viewing of admin user accounts dashboard

    public function adminFacultyAccounts()
    {
        $userFaculty = User::where('user_type','Faculty')->get();
        return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $userFaculty);
    }//end viewing of admin user accounts dashboard

    public function adminStudentAccounts()
    {
        $userStudent = User::where('user_type','Student')->get();
        return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $userStudent);
    }//end viewing of admin user accounts dashboard

    //for storing userInformation And Register
    public function storeUserInfo(Request $request)
    {
            $validator = Validator::make($request->all(), [
            'middle_name' => 'required',
            'last_name' => 'required',
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type' => 'required',
            ]);
                    $user = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'user_type' => $request->user_type,
                    ];
                    User::create($user);
                    $id = DB::table("users")->select("id")->orderBy('id','desc')->value('id');
                    $userInfo = [
                        'name' => $request->name,
                        'middle_name' => $request->middle_name,
                        'last_name' => $request->last_name,
                        'user_ID' => $id,
                    ];
                    user_info::create($userInfo);
                    $user = User::all();
                    return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $user);

            event(new Registered($user));
    }//end of adding userInformation

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        $user = User::all();
        return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $user);
    }//end of updating users table

    public function deleteUser($id)
    {
        User::destroy($id);
        $user = User::all();
        return view ('IEMS.Linus.ADMIN.adminDashboard')->with('user', $user);
    }//end of deleting user accounts
    
}
