<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(){
        return view('students.add');
    }
    public function newStudent(Request $request){
        Student::createStudent($request);
        return back()->with('success', 'Student Create Successfully');
    }
    public function manageStudent(){
        return view('students.manage');
    }
}
