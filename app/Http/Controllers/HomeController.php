<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Grade;
use Auth;

class HomeController extends Controller
{
    function index(){

        $teachers = Teacher::orderBy('created_at','desc')->Paginate(3);
        $students = Student::orderBy('created_at','desc')->Paginate(3);
        $subjects = Subject::orderBy('created_at','desc')->Paginate(3);
        $grades = Grade::orderBy('created_at','desc')->Paginate(3);
        if(Auth::user()->isTeacher !== null) {
            $grades = Grade::where('teacher_id',Auth::user()->isTeacher)
            ->orderBy('created_at','desc')->Paginate(5);
        }
        else if(Auth::user()->isStudent !== null) {
            $grades = Grade::where('student_id',Auth::user()->isStudent)
            ->orderBy('created_at','desc')->Paginate(5);
        }

        return view('index', ['title'=>'SchoolMS - Home',
            'teachers' => $teachers, 'students' => $students,
             'subjects' => $subjects, 'grades' => $grades]);
    }

    function test(){
        
    }
}
