<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Mail\lel

class RegistrationController extends Controller
{
    public function create(){

      return view('registration.create');
    }
    public function store(){
      if(!$this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|confirmed' ])){
        $data = request()->all();
        return view('registration.create')->with('data',$data);
      }



    $user = User::create(request(['name', 'email', 'password']));

    auth()->login($user);

    \Mail::to($user->email)->send(new lel($user));
    return redirect()->to('/');
    //Ha müködik: 'Ok', "Sikeres regisztráció".
  }
}
