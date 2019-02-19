<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Passers;
use Response;

class ExamPassers extends Controller
{ 

    public function lists(){
        
        $exam_passers = Passers::all()->sortBy("examinee");

        return view('lists', ['passers' => $exam_passers]);

    }

    public function store(Request $request){ 

        $passers                        = new Passers;

        $passers->examinee              = $request->examinee;
        $passers->campus_eligibility    = $request->campus_eligibility;
        $passers->school                = $request->school;
        $passers->division              = $request->division;
 
        $passers->save();

     }

    public function search_passers(Request $request){ 
            
        $search_field             = $request->search_field;
        
        $exam_passers = Passers::where('examinee', 'like' , '%'. $search_field . '%')
                        ->orWhere('campus_eligibility', 'like' , '%'. $search_field . '%')
                        ->orWhere('school', 'like' , '%'. $search_field . '%')
                        ->orWhere('division', 'like' , '%'. $search_field . '%')->get();
 
        return view('lists', ['passers' => $exam_passers, 'search' => true, 'search_field' => $search_field]);

    }

    public function school_by_passers(){

        $passers                        = new Passers;

        // , Passers::raw('count(*) as no_passers')

        $exam_passers =     $passers->selectRaw("school, COUNT(id) AS passers_cnt")
                                ->groupBy('school')
                                ->get()                                
                                ->sortBy("passers_cnt")
                                ->sortByDesc->passers_cnt;

        return view('school_by_passers', ['school_by_passers' => $exam_passers]);

    }

    public function list_vue(){

        return view('list_vue');

    }

    public function get_passers(){

        $exam_passers = Passers::all()->sortBy("examinee");

        return response($exam_passers->jsonSerialize());
    }        
}