@extends('admin.admin')
@section('content')
<!-- dashboard section starts -->



<div class="container-section">

<div class="dashboard-content">

    <div class="box-container"> 
       <a href="{{route('adminAccount',$admin->id)}}">
       <div class="box">
        <i class="fa fa-user" aria-hidden="true"></i>
            <div class="text"> 
                <h3>my account </h3>
                <p>edit your name or change your password </p>        

            </div>
        </div>
       </a>
       <a href="{{route('offer',$admin->id)}}">
       <div class="box">
            <i class="fa fa-handshake"></i>
            <div class="text">
                 <h3>offer(s)</h3>
                 <p>{{$offers}}</p>
            </div>
           
        </div>
       </a>
        <a href="{{route('candidate',$admin->id)}}">
        <div class="box">
            <i class="fa fa-user-circle"></i>
            <div class="text">
            <h3>candidate(s)</h3>
            <p> {{$candidates}}</p>
            </div>
        </div>
        </a>
       
    </div>
</div>  
</div>
     
<!-- dashboard section ends -->
@endsection
