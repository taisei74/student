<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        return view('index')->with(['students' => $student->get()]);
    }
    public function create(Subject $subject)
    {
        return view('create')->with(['subjects' =>$subject->get()]);
    }
    public function store(Student $student, Request $request)
    {
        $input_student = $request['student'];
        $input_subjects = $request->subjects_array;
        $student->fill($input_student)->save();
        
        $student->subjects()->attach($input_subjects);
        return redirect('/');
    }
}
