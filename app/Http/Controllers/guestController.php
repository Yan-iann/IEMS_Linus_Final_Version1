<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\user_info;
use App\Models\User;
use App\Models\wildlife;
use App\Models\thesis_paper;
use App\Models\journal_article;
use App\Models\announcement;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect; 
use DB;

class guestController extends Controller
{
    public function guestDashboard()
    {
        $guestDashboard = Wildlife::where('wildlife_type','Zoo')->get();
        return view ('IEMS.Linus.GUEST.GuestWLDashboard')->with('studentDashboard', $guestDashboard);
    }//end viewing of student wildlife dashboard

    public function thesis()
    {
        $thesis = thesis_paper::all();
        return view('IEMS.Linus.GUEST.GuestThesisDashboard')->with('thesis',$thesis);
    }
    public function gradThesis()
    {
        $thesis = thesis_paper::where('thesis_type','PostGraduate')->get();
        return view('IEMS.Linus.GUEST.GuestThesisDashboard')->with('thesis',$thesis);
    }
    public function undergradThesis()
    {
        $thesis = thesis_paper::where('thesis_type','UnderGraduate')->get();
        return view('IEMS.Linus.GUEST.GuestThesisDashboard')->with('thesis',$thesis);
    }

    public function journal()
    {
        $journal = journal_article::all();
        return view('IEMS.Linus.GUEST.GuestJournalDashboard')->with('journal',$journal);
    }
    
}
