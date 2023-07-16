<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Admin;
use App\Models\Candidate;


use Illuminate\Http\Request;

class offerController extends Controller
{
    
    public function index()
    {
        $jobs = Offer::all();
        return view('jobs',compact('jobs'));
    }
    public function offer(Request $request)
    { 
        $id = (int)$request->id;
        $admin = Admin::findOrFail($id);

        $offers = $admin->offers;
        return view('admin.offer',compact('admin'),compact('offers'));
    }
    public function offerDetails(Request $request)
    { 
        $id = (int)$request->id;
        $admin = Admin::findOrFail($id);
        $offerId=(int)$request->offerId;
        $offer = Offer::findOrFail($offerId);
        $candidates=Candidate::select('candidates.*','offers.title as offerTitle')
        ->join('offers','offers.id','=','candidates.offer_id')
        ->join('admins','admins.id','=','offers.admin_id')
        ->where('admins.id', $admin->id)
        ->count(); 

        
        return view('admin.details',compact('admin'),compact('offer','candidates'));
    }

    public function create(Request $request)
    {
        $id = (int)$request->id;
        $admin = Admin::findOrFail($id);

        return view('admin.add',compact('admin'));
    }
   
    public function store(Request $request)
    {
        $title=$request->title;
        $img_path=$request->pic;
        $category=$request->category;
        $description=$request->desc;
        $admin = $request->admin_id;
        $city=$request->city;
        $adress= $request->adress;
        $company=$request->company;

         //validation
        $request->validate([
            'title' => 'required'
        ]);
        //insertion
        Offer::create([
            'title' => $title,
            'category'=>$category,
            'description' => $description,
            'img_path' => $img_path,
            'admin_id' => $admin,
            'city' => $city,
            'adress'=>$adress,
            'company'=>$company,
        ]);
 
       return redirect()->route('offer',$admin);

    }

    public function show(Request $request)
    {
        $id = (int)$request->id;
        $job = Offer::findOrFail($id);
        return view('job_details',compact('job'));
    }

    public function edit(Request $request)
    {
        $adminid = (int)$request->adminId;
        $admin = Admin::findOrFail($adminid);
        $offerid = (int)$request->id;
        $offer=Offer::findOrFail($offerid);
        return view('admin.update',compact('admin'),compact('offer'));
        
    }

    
    public function update(Request $request)
    {
        $adminid = (int)$request->adminId;
        $admin = Admin::findOrFail($adminid);
        $offerid = (int)$request->id;
        $offer=Offer::findOrFail($offerid);

        $offer->title=$request->input('title');
        $offer->img_path=$request->input('pic');
        $offer->adress=$request->input('adress');
        $offer->company=$request->input('company');
        $offer->city=$request->input('city');
        $offer->category=$request->input('cotegory');
        $offer->description=$request->input('desc');
        $offer->update();

        return to_route('offer',$admin->id);
    }

   
    public function destroy(Request $request)
    { 
        $offerid = (int)$request->offerId;
        $adminid = (int)$request->adminId;


        $offer=Offer::findOrFail($offerid);
        $offer->delete();
        return to_route('offer',$adminid)->with('success','deleted successfuly!');

    }
}
