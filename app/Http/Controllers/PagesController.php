<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class PagesController extends Controller
{
    public function home(){
        $jobs = Offer::All()->take(3);
      
        $x = [Offer::where('category', 'developpement')->count(),
              Offer::where('category', 'childcarer')->count(),
              Offer::where('category', 'medicine')->count(),
              Offer::where('category', 'restaurent')->count(),
              Offer::where('category', 'finance')->count(),
              Offer::where('category', 'teaching')->count(),
              Offer::where('category', 'delivery')->count(),
              Offer::where('category', 'waiter')->count(),
            ];
      
        return view('home',compact('jobs'),compact('x'));
    }
    public function about(){
        return view('about');
    }
    public function jobs(){
        return view('jobs');
    }
    public function contact(){
        return view('contact');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
  
    public function offer(){
        return view('admin.offer');
    }
    public function add(){
        return view('admin.add');
    }
    public function details(){
        return view('admin.details');
    }
    public function update(){
        return view('admin.update');
    }
    public function candidate(){
        return view('admin.candidate');
    }
    public function candidateDetails(){
        return view('admin.candidateDetails');
    }
    public function addCandidate(){
        return view('admin.addCandidate');
    }
    public function adminAccount(){
        return view('admin.adminAccount');
    }
    public function apply(){
        return view('apply');
    }
    public function logout(){
        return view('admin.login');
    }
}
