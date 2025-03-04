<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('students.index');

    }

    public function create(){
        return view('students.create');
    }   


    public function show($id){
        $student = Student::find($id);
        return view('students.show', compact('student'));

    }
}
