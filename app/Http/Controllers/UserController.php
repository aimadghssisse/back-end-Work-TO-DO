<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use validate;

class UserController extends Controller
{
  public function register(Request $request)
  {
    $input = $request->validate([
      'first_name' => 'max:255',
      'last_name' => 'max:255',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6|max:255',
      'role' => 'required'
    ]);
    $user = new User();
    $input['password'] = bcrypt($input['password']);

    $user = User::create($input);
    $success['token'] = $user->createToken(config('app.name'))->accessToken;
    $success['user'] = $user;
    return Response()->json($success);
  }


}
