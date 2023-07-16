@extends('admin.admin')
@section('content')

<div class="offer-details">
    <h3>details <span>=></span></h3>
<div class="job-details">

    <div class="details">
        <p>full name : <span>{{$candidate->full_name}}</span></p>
        <p>email : <span>{{$candidate->email}}</span></p>
        <p>number : <span>{{$candidate->number}}</span></p>
        <p>cv : <span>{{$candidate->cv}}</span></p>
        <p>letter : <span>{{$candidate->letter}}</span></p>
        <p>adress : <span>{{$candidate->adress}}</span></p>
   
    </div>
    
    </div>
 
    
</div>
</div>
</div>
@endsection