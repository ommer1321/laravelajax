<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class MainController extends Controller
{


  public function index(){


    return view('index');

  }



  public function store(Request $request){
    
    $student = new Student;
    $student->name = $request->input('name');
    $student->email = $request->input('email');
    $student->phone = $request->input('phone');
    $student->course = $request->input('course');
    $student->save();
    return response()->json([
        
        'status' =>200,
        'message' =>'Added Student',
    ]);
    return view('index');

  }
}
