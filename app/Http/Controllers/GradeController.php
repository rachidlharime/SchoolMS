<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use Auth;
use Illuminate\Database\QueryException;

class GradeController extends Controller
{
    function index() {
        $grades = Grade::Paginate(5);
        if(Auth::user()->isTeacher !== null) {
            $grades = Grade::where('teacher_id',Auth::user()->isTeacher)->Paginate(5);
        } 
        else if(Auth::user()->isStudent !== null) {
            $grades = Grade::where('student_id',Auth::user()->isStudent)->Paginate(5);
        }

        return view('grades.index', ['title'=>'SchoolMS - Grades', 'grades'=>$grades]);
    }

    function form($id = null){
        $students = Student::All();

        return view('grades.add', ['title'=>'SchoolMS - New grade', 
            'id'=>$id, 'students'=>$students]);
    }

    function add(Request $req){
        try {
            $grade = Grade::create($req->all());

            return redirect()->route('grades')->with('msg','New grade has been added');

        } catch(QueryException $ex){ 

            return back()->with('msg','an error occured , try again later');
        }
    }

    function edit($id){
        $students = Student::All();
        $grade = Grade::find($id);
        
        return view('grades.edit', ['title'=>'SchoolMS - Edit grade', 'grade'=>$grade, 'students'=>$students]);
    }

    function update($id,Request $req){
        try {
            $grade = Grade::find($id);
            $grade->update($req->all());
    
            return redirect()->route('grades')->with('msg','A grade has been updated');

        } catch(QueryException $ex){ 

            return back()->with('msg','an error occured , try again later');
        }
    }

    function remove($id){
        try {
            $grade = Grade::find($id);
            $grade->delete();

            return redirect()->route('grades')->with('msg','A grade has been removed');

        } catch(QueryException $ex){ 

            return back()->with('msg','an error occured , try again later');
        }
        
    }
}
