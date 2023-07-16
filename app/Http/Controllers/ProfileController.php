<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create(){
        return view('register');
    }
  
    public function error(){
        return 'error';

    }
    public function store(Request $request){

        $name = $request->name;
        $number = $request->number;
        $email = $request->email;
       

      
        Profile::create([
           'full_name'=> $name,
           'number'=>$number,
           'email'=> $email,
        ]); 
       
            return redirect()->route('CUser');
       
    }
}
