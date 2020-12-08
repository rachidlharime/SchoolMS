<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Database\QueryException;

class SubjectController extends Controller
{
    function index() {
        $subjects = Subject::Paginate(5);

        return view('subjects.index', ['title'=>'SchoolMS - Subjects', 'subjects'=>$subjects]);
    }

    function form(){

        return view('subjects.add', ['title'=>'SchoolMS - New subject']);
    }

    function add(Request $req){
        try {
            $subject = Subject::create($req->all());

            return redirect()->route('subjects')->with('msg','New subject has been added');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occured , try again later');
        }
    }

    function edit($id){
        $subject = Subject::find($id);
        
        return view('subjects.edit', ['title'=>'SchoolMS - Edit subject', 'subject'=>$subject]);
    }

    function update($id,Request $req){
        try {
            $subject = Subject::find($id);
            $subject->update($req->all());

            return redirect()->route('subjects')->with('msg','A subject has been updated');
            
        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occured , try again later');
        }
        
    }

    function remove($id){
        try {
            $subject = Subject::find($id);
            $subject->delete();

            return redirect()->route('subjects')->with('msg','A subject has been removed');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occured , try again later');
        }
    }
}
