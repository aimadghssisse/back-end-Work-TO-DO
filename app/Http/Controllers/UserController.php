<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Professor;
use validate;

class UserController extends Controller
{
  public function registerStudent(Request $request)
  {
    $input = $request->validate([
      'first_name' => 'max:255',
      'last_name' => 'max:255',
      'email' => 'required|email|unique:students',
      'phone' => 'max:255',
      'level' => 'required',
      'module' => 'required'
    ]);

    $student = new Student();
    $student = Student::create($input);
    return Response()->json(['status' => true, 'msg' => __('Student add by success')]);
  }

  public function registerProfessor (Request $request)
  {
    $input = $request->validate([
      'first_name' => 'max:255',
      'last_name' => 'max:255',
      'email' => 'required|email|unique:professors',
      'phone' => 'max:255',
      'level' => 'required',
      'module' => 'required'
    ]);

    $student = new Professor();
    $student = Professor::create($input);
    return Response()->json(['status' => true, 'msg' => __('Professor add by success')]);
  }

}
