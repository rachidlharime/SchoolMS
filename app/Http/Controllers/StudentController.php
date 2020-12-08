<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class StudentController extends Controller
{
    function index() {
        $students = Student::Paginate(5);

        return view('students.index', ['title'=>'SchoolMS - Students', 'students'=>$students]);
    }
    
    function form(){

        return view('students.add', ['title'=>'SchoolMS - New student']);
    }

    function add(Request $req){
        try {
            $student = Student::create($req->all());
            
            if($req->image !== null){
                $imageName = time().'.'.$req->file('image')->getClientOriginalExtension();
                $student->image = $imageName;
                $student->save();
                $req->image->move(public_path('images/students'),$imageName);
            }

            return redirect()->route('studentAccount', ['id'=>$student->id])->with('msg','New student has been added');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occured , try again later');
        }
    }

    function account(Request $req,$id){
        try { 
            $user = new User;
            $user->username = $req->username;
            $user->password = Hash::make($req->password);
            $user->isstudent = $id;
            $user->save();

            return redirect()->route('students')->with('msg','An account has been created for a student');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occured , try again later');
        }

    }

    function edit($id){
        $student = Student::find($id);
        
        return view('students.edit', ['title'=>'SchoolMS - Edit student', 'student'=>$student]);
    }

    function update($id,Request $req){
        try {    
            $student = Student::find($id);
            $student->update($req->all());

            if($req->image !== null){
                $imageName = time().'.'.$req->file('image')->getClientOriginalExtension();
                $student->image = $imageName;
                $student->save();
                $req->image->move(public_path('images/students'),$imageName);
            }

            return redirect()->route('students')->with('msg','A student has been updated');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occured , try again later');
        }
    }

    function remove($id){
        try {
            $student = Student::find($id);
            $student->delete();

            return redirect()->route('students')->with('msg','A student has been removed');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occured , try again later');
        }
    }

}
