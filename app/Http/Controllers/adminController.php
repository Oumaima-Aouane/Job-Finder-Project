<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Offer;
use App\Models\Candidate;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = (int)$request->id;
        $admin = Admin::findOrFail($id);




        return view('admin.adminAccount',compact('admin'));
    }
  
    public function dashboard(){
        return view('admin.dashboard');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        // $email=$request->email;
        // $pass=$request->password;
        // $values=['email'=>$email, 'password'=>$pass];
        // dd(Auth::attempt($values));

    $user = Admin::where('email','=',$request->email)->first();
    if($user && $request->password == $user->password){
        $request->session()->put('name',$user);
        $admin=$request->session()->get('name');
        $offers=$admin->offers->count();
        
        $candidates=Candidate::select('candidates.*','offers.title as offerTitle')
                ->join('offers','offers.id','=','candidates.offer_id')
                ->join('admins','admins.id','=','offers.admin_id')
                ->where('admins.id', $admin->id)
                ->count(); 

        return view('admin.dashboard',compact('admin'),compact('offers','candidates'));

    }else{
        return 'ERROR';
    }

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $full_name=$request->fname." ".$request->lname;
        $email=$request->email;
        $number=$request->number;
        $pass=$request->pass;
        $cpass=$request->cpass;
        $company=$request->company;
        $image=$request->image;

        if($pass == $cpass){
            Admin::create([
                 'fullname'=>$full_name,
                 'email'=>$email,
                 'password'=>$pass,
                  'number'=>$number,
                 'company'=>$company,
                 'company_id'=>1,
                 'image'=>$image,
            ]);
            return to_route('loginAdmin')->with('success','your account created successfuly!');
        }else{
           return 'error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = (int)$request->id;
        $admin = Admin::findOrFail($id);
        $offers=$admin->offers->count();

        $candidates=Candidate::select('candidates.*','offers.title as offerTitle')
                ->join('offers','offers.id','=','candidates.offer_id')
                ->join('admins','admins.id','=','offers.admin_id')
                ->where('admins.id', $admin->id)
                ->count(); 

        return view('admin.dashboard',compact('admin'),compact('offers','candidates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $adminid = (int)$request->id;
        $admin=Admin::findOrFail($adminid);
        return view('admin.updateAdmin',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $adminid = (int)$request->id;
        $admin=Admin::findOrFail($adminid);

        $admin->fullname=$request->input('fullname');
        $admin->email=$request->input('email');
        $admin->number=$request->input('number');
        $admin->password=$request->input('password');
        $admin->image=$request->input('pic');
        $admin->company=$request->input('company');
        $admin->update();

        return to_route('adminAccount',$admin->id);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $adminid = (int)$request->id;
        $admin=Admin::findOrFail($adminid);
        $admin->delete();
        return to_route('loginAdmin');
    }
}
