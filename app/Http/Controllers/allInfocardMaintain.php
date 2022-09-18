<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Wildlife;
use App\Models\thesis_paper;
use App\Models\journal_article;
use Illuminate\Support\Facades\Redirect;  

class allInfocardMaintain extends Controller
{
    
    public function storeDataWildlife()
    {
         $validator = Validator::make(request()->all(), [
        'wildlife_name' => 'required',
        'wildlife_scientific_name' => 'required',
        'wildlife_class' => 'required',
        'wildlife_order' => 'required',
        'wildlife_family' => 'required',
        'wildlife_genus' => 'required',
        'wildlife_species' => 'required',
        'wildlife_location' => 'required',
        'wildlife_desc' => 'required',
        'wildlife_pic' => 'required',
        'wildlife_status' => 'required',
        ]);
    
        if($validator->fails())
        {
        return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
        }
        else
        {
        $requestData = request()->all();
        $filename = time().request()->file('wildlife_pic')->getClientOriginalName();
        $path = request()->file('wildlife_pic')->storeAs('images',$filename,'public');
        $requestData["wildlife_pic"] = '/storage/' .$path;
        Wildlife::create($requestData);
        $wildlife = Wildlife::all();
        return view ('wildlife')->with('wildlifes', $wildlife);
        }
    }//end of adding wildlife

    public function storeDataThesis()
    {
         $validator = Validator::make(request()->all(), [
        'thesis_title' => 'required',
        'thesis_author' => 'required',
        'thesis_reference' => 'required',
        'thesis_file' => 'required',
        'thesis_type' => 'required',
        'date_published' => 'required',
        'thesis_status' => 'required',
        ]);
    
        if($validator->fails())
        {
        return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
        }
        else
        {
        $requestData = request()->all();
        thesis_paper::create($requestData);
        $thesis = thesis_paper::all();
        return view('thesis')->with('thesis',$thesis);
        }
    }//end of adding thesis

    public function storeDataJournal()
    {
        $validator = Validator::make(request()->all(), [
            'journal_title' => 'required',
            'journal_author' => 'required',
            'journal_reference' => 'required',
            'journal_desc' => 'required',
            'date_published' => 'required',
            'journal_status' => 'required',
            ]);
        
            if($validator->fails())
            {
            return back()->withErrors($validator)->withInput()->with('error','Something went wrong. Please try again.');
            }
            else
            {
            $requestData = request()->all();
            journal_article::create($requestData);
            $journal = journal_article::all();
            return view('journal')->with('journal',$journal);
            }
    }//end of adding journal
}
