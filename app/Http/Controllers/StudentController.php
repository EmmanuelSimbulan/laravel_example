<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index()
    {
        $data = Student::all();
        @dd($data);
        return view('student.index', $data);
        //return 'Students';
    }
}
