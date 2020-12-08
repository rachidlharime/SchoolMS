<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class TeacherController extends Controller
{
    function index(){
        $teachers = Teacher::Paginate(5);
        $subjects =  Subject::All();

        return view( 'teachers.index', 
            ['title'=>'SchoolMS - Teachers', 'teachers'=>$teachers, 'subjects'=>$subjects] );
    }

    function form(){
        $subjects =  Subject::All();

        return view('teachers.add', ['title'=>'SchoolMS - New teacher', 'subjects'=>$subjects]);
    }

    function add(Request $req){
        try { 
            $teacher = Teacher::create($req->all());
        
            if($req->image !== null){
                $imageName = time().'.'.$req->file('image')->getClientOriginalExtension();
                $teacher->image = $imageName;
                $teacher->save();
                $req->image->move(public_path('images/teachers'),$imageName);
            }

            return redirect()->route('teacherAccount', ['id'=>$teacher->id])->with('msg','New teacher has been added');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occuring , try again later');
        }
        
    }

    function account(Request $req,$id){
        try { 
            $user = new User;
            $user->username = $req->username;
            $user->password = Hash::make($req->password);
            $user->isTeacher = $id;
            $user->save();

            return redirect()->route('teachers')->with('msg','An account has been created for a teacher');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occured , try again later');
        }
        
    }

    function edit($id){
        $subjects =  Subject::All();
        $teacher = Teacher::find($id);
        
        return view('teachers.edit', ['title'=>'SchoolMS - Edit teacher', 'teacher'=>$teacher, 'subjects'=>$subjects]);
    }

    function update($id,Request $req){
        try { 
            $teacher = Teacher::find($id);
            $teacher->update($req->all());

            if($req->image !== null){
                $imageName = time().'.'.$req->file('image')->getClientOriginalExtension();
                $teacher->image = $imageName;
                $teacher->save();
                $req->image->move(public_path('images/teachers'),$imageName);
            }

            return redirect()->route('teachers')->with('msg','A teacher has been updated');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occuring , try again later');
        }
    }

    function remove($id){
        try { 
            $teacher = Teacher::find($id);
            $teacher->delete();

            return redirect()->route('teachers')->with('msg','A teacher has been removed');

        } catch(QueryException $ex){ 

            return redirect()->back()->with('msg','an error occuring , try again later');
        }
        
    }

}
