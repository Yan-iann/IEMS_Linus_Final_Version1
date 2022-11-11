<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Infocard;
use App\Models\Wildlife;
use App\Models\thesis_paper;
use App\Models\journal_article;
use Illuminate\Support\Facades\Redirect;  

class allInfocardMaintain extends Controller
{
    
    public function storeDataWildlife(Request $request)
    {
         $validator = Validator::make(request()->all(), [
        'wildlife_name' => 'required',
        'wildlife_scientific_name' => 'required',
        'wildlife_desc' => 'required',
        'wildlife_pic' => 'required',
        'wildlife_status' => 'required',
        'wildlife_type' => 'required',
        'info_type' => 'required',
        ]);
    
        if($validator->fails())
        {
        return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
        }
        else
        {
            $infocard = new Infocard;
            $infocard->info_type = $request->info_type;
            if($infocard->save())
            {
                $requestData = request()->all();
                $requestData["info_ID"] =  $infocard->info_ID;
                $filename = time().request()->file('wildlife_pic')->getClientOriginalName();
                $path = request()->file('wildlife_pic')->move('storage/images',$filename);
                $requestData["wildlife_pic"] = $path;
                Wildlife::create($requestData);
                $wildlife = Wildlife::where('wildlife_type','Zoo')->get();
                return view ('IEMS.Linus.FACULTY.wildlife')->with('wildlifes', $wildlife);
            }
        }
    }//end of adding wildlife

    public function storeDataThesis(Request $request)
    {
         $validator = Validator::make(request()->all(), [
        'thesis_title' => 'required',
        'thesis_author' => 'required',
        'thesis_reference' => 'required',
        'thesis_type' => 'required',
        'date_published' => 'required',
        'thesis_status' => 'required',
        'info_type' => 'required',
        ]);
    
        if($validator->fails())
        {
        return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
        }
        else
        {
            $infocard = new Infocard;
            $infocard->info_type = $request->info_type;
            if($infocard->save())
            {
                $requestData = request()->all();
                $requestData["info_ID"] =  $infocard->info_ID;
                thesis_paper::create($requestData);
                $thesis = thesis_paper::all();
                return view('IEMS.Linus.FACULTY.thesis')->with('thesis',$thesis);
            }     
        }
    }//end of adding thesis

    public function storeDataJournal(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'journal_title' => 'required',
            'journal_author' => 'required',
            'journal_reference' => 'required',
            'journal_desc' => 'required',
            'date_published' => 'required',
            'journal_status' => 'required',
            'info_type' => 'required',
            ]);
        
            if($validator->fails())
            {
            return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
            }
            else
            {
                $infocard = new Infocard;
                $infocard->info_type = $request->info_type;
                if($infocard->save())
                {
                    $requestData = request()->all();
                    $requestData["info_ID"] =  $infocard->info_ID;
                    journal_article::create($requestData);
                    $journal = journal_article::all();
                    return view('IEMS.Linus.FACULTY.journal')->with('journal',$journal);
                }
            }
    }//end of adding journal
}
