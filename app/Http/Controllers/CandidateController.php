<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Offer;
use App\Models\Admin;




class CandidateController extends Controller
{
    public function index(Request $request){
        $id = (int)$request->id;
        $admin = Admin::findOrFail($id);
        $offers=$admin->offers;

        $candidates=Candidate::select('candidates.*','offers.title as offerTitle')
                ->join('offers','offers.id','=','candidates.offer_id')
                ->join('admins','admins.id','=','offers.admin_id')
                ->where('admins.id', $admin->id)
                ->get(); 

        return view('admin.candidate',compact('candidates'),compact('admin'));
    }
    
    public function show(Request $request)
    {
        $id = (int)$request->id;
        $admin = Admin::findOrFail($id);
        $Cid = (int)$request->Cid;
        $candidate =Candidate::findOrFail($Cid);
        return view('admin.candidateDetails',compact('candidate'),compact('admin'));
    }
    public function create(Request $request)
    {
        $id = (int)$request->id;
        $job = Offer::findOrFail($id);
        return view('apply',compact('job'));
    }

    public function store(Request $request)
    {
        $full_name=$request->fname." ".$request->lname;
        $email=$request->email;
        $number=$request->number;
        $adress=$request->adress;
        $cv=$request->cv;
        $letter=$request->letter;
        $offer_id=$request->offerId;

      
            Candidate::create([
                 'full_name'=>$full_name,
                 'email'=>$email,
                 'adress'=>$adress,
                  'number'=>$number,
                 'cv'=>$cv,
                 'letter'=>$letter,
                 'offer_id'=>$offer_id,
            ]);

            return to_route('homePage')->with('success','your account created successfuly!');
       
    }

    public function destroy(Request $request)
    {   $admin=Admin::findOrFail((int)$request->Aid);
        $Cid = (int)$request->Cid;
        $candidate=Candidate::findOrFail($Cid);
        $candidate->delete();
        return to_route('candidate',$admin->id);
    }
}
