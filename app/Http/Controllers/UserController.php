<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return 'Hello World';
    }
    public function show($id){
        $data  = array (
            'id' => $id,
            'name' => 'John Doe',
            'age' => 27
        );
        return view('user', ['data'=>$data]);
    }
}
