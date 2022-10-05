<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Infocard;
use App\Models\Wildlife;
use App\Models\thesis_paper;
use App\Models\journal_article;
use Illuminate\Support\Facades\Redirect; 

class infocardMaintain extends Controller
{
    //for viewing the infocards
    public function wildlife()
    {
        $wildlife = Wildlife::all();
        return view ('wildlife')->with('wildlifes', $wildlife);
    }
    public function thesis()
    {
        $thesis = thesis_paper::all();
        return view('thesis')->with('thesis',$thesis);
    }
    public function journal()
    {
        $journal = journal_article::all();
        return view('journal')->with('journal',$journal);
    }

    public function Fprofile()
    {
        return view ('FProfileView');
    }
    //end of viewing infocards
////////////////////////////////////////////////////////////////////////////////////////////////////////
    //for showing
    public function showWildlife($info_ID)
    {
        $wildlife = Wildlife::find($info_ID);
        return view('displayWildlife')->with('wildlifes',$wildlife);
    }
    public function showThesis($info_ID)
    {
        $thesis = thesis_paper::find($info_ID);
        return view('displayThesis')->with('thesis',$thesis);
    }
    public function showJournal($info_ID)
    {
        $journal = journal_article::find($info_ID);
        return view('displayJournal')->with('journal',$journal);
    }
    //end of showing infocards
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    //for editing infocards
    public function editWildlife($info_ID)
    {
        $wildlife = Wildlife::find($info_ID);
        return view('editWildlife')->with('wildlifes',$wildlife);
    }
    public function updateWildlife(Request $request, $info_ID)
    {
        $wildlife = Wildlife::find($info_ID);
        $input = $request->all();
        $wildlife->update($input);
        $wildlife = Wildlife::all();
        return view('wildlife')->with('wildlifes',$wildlife);
    }

    public function editThesis($info_ID)
    {
        $thesis = thesis_paper::find($info_ID);
        return view('editThesis')->with('thesis',$thesis);
    }
    public function updateThesis(Request $request, $info_ID)
    {
        $thesis = thesis_paper::find($info_ID);
        $input = $request->all();
        $thesis->update($input);
        $thesis = thesis_paper::all();
        return view('thesis')->with('thesis',$thesis);
    }
    public function editJournal($info_ID)
    {
        $journal = journal_article::find($info_ID);
        return view('editJournal')->with('journal',$journal);
    }
    public function updateJournal(Request $request, $info_ID)
    {
        $journal = journal_article::find($info_ID);
        $input = $request->all();
        $journal->update($input);
        $journal = journal_article::all();
        return view('journal')->with('journal',$journal);
    }
    //end of editing of infocards
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //for deleting infocards
    public function deleteWildlife($info_ID)
    {
        Infocard::destroy($info_ID);
        $wildlife = Wildlife::all();
        return view ('wildlife')->with('wildlifes', $wildlife);
    }
    public function deleteThesis($info_ID)
    {
        Infocard::destroy($info_ID);
        $thesis = thesis_paper::all();
        return view ('thesis')->with('thesis', $thesis);
    }
    public function deleteJournal($info_ID)
    {
        Infocard::destroy($info_ID);
        $journal = journal_article::all();
        return view ('journal')->with('journal', $journal);
    }
    //end of deleting infocards
///////////////////////////////////////////////////////////////////////////////////////////////////////////// 


    //for storing data in infocard table
    public function storeDataWildlife(Request $request)
    {
        return view('/addWL');
    }//end of save

    public function storeDataThesis(Request $request)
    {
        return view('/addThesis');
    }//end of save

    public function storeDataJournal(Request $request)
    {
        return view('/addJournal');
    }//end of save
    //end of storing data in infocard table
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//search infocards
    public function searchwildlife()
    {
        $searchText = $_GET['searchWildlife'];
        $wildlife = Wildlife::where('wildlife_name','LIKE','%'.$searchText.'%')->get();
        return view('searchWildlife',compact('wildlife'));
    }
    public function searchThesis()
    {
        $searchText = $_GET['searchThesis'];
        $thesis = thesis_paper::where('thesis_title','LIKE','%'.$searchText.'%')->get();
        return view('searchThesis',compact('thesis'));
    }
    public function searchJournal()
    {
        $searchText = $_GET['searchJournal'];
        $journal = journal_article::where('journal_title','LIKE','%'.$searchText.'%')->get();
        return view('searchJournal',compact('journal'));
    }
    //end of search//
    
    //start of analysis

    public function analysis()
    {
        $wildlife = Wildlife::count();
        $thesis = thesis_paper::count();
        $journal = journal_article::count();

        return view('fAnalytics',compact('wildlife','thesis','journal'));
    }












    //end of analysis
}
