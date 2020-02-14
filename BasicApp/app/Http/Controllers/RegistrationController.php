<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create(){

      return view('registration.create');
    }
    public function store(){
      if(!$this->validate(request(), [
      'name' => 'required',
      'email' => 'required|unique:users,email',
      'password' => 'required|confirmed' ])){
        $data = request()->all();
        return view('registration.create')->with('data',$data);
      }



    $user = User::create(request(['name', 'email', 'password']));

    auth()->login($user);

    return redirect()->to('/');
    //Ha müködik: 'Ok', "Sikeres regisztráció".
  }
}
