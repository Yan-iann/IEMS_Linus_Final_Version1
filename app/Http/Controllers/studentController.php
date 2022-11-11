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

class studentController extends Controller
{
    //
    public function studentDashboard()
    {
        $studentDashboard = Wildlife::where('wildlife_type','Zoo')->get();
        return view ('IEMS.Linus.STUDENT.StudentWLDashboard')->with('studentDashboard', $studentDashboard);
    }//end viewing of student wildlife dashboard

    public function thesis()
    {
        $thesis = thesis_paper::all();
        return view('IEMS.Linus.STUDENT.StudentThesisDashboard')->with('thesis',$thesis);
    }

    public function journal()
    {
        $journal = journal_article::all();
        return view('IEMS.Linus.STUDENT.StudentJournalDashboard')->with('journal',$journal);
    }
    public function request()
    {
        $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
        return view('IEMS.Linus.STUDENT.requestDashboard')->with('announcement',$anno);
    }
    //for storing announcement
    public function storeAnno(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'anno_title' => 'required',
            'anno_author' => 'required',
            'anno_date' => 'required',
            'anno_content' => 'required',
            'anno_status' => 'required',
            'user_ID' => 'required',
            ]);
        
            if($validator->fails())
            {
            return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
            }
            else
            {
                $anno = [
                    'anno_title' => $request->anno_title,
                    'anno_author' => $request->anno_author,
                    'anno_date' => $request->anno_date,
                    'anno_content' => $request->anno_content,
                    'anno_status' => $request->anno_status,
                    'user_ID' => $request->user_ID,
                ];
                announcement::create($anno);
                $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
                return view('IEMS.Linus.STUDENT.requestDashboard')->with('announcement',$anno);
            }

    }

    public function updateAnno(Request $request, $id)
    {
        $anno = announcement::find($id);
        $input = $request->all();
        $anno->update($input);
        $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
        return view('IEMS.Linus.STUDENT.requestDashboard')->with('announcement',$anno);
    }//end of updating request table

    public function deleteAnno($id)
    {
        announcement::destroy($id);
        $anno = announcement::where('user_ID', '=', Auth::user()->id )->get();
        return view('IEMS.Linus.STUDENT.requestDashboard')->with('announcement',$anno);
    }//end of deleting user accounts

}
