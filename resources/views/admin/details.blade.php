@extends('admin.admin')
@section('content')

<!-- view job setails section starts -->

<div class="offer-details">
    <h3>details <span>=></span></h3>
<div class="job-details">

    <div class="details">
        <img src="images/{{$offer->img_path}}" alt="img" srcset="">
        <h3>{{$offer->title}}</h3>
        <a href="#">{{$offer->company}}.</a>
        <p><i class="fas fa-map-marker-alt"></i>{{$offer->city}}</p>
   
    <div class="description">
        <h3>job description</h3>
        <p>{{$offer->description}}.</p>
       
    </div>
    </div>
 
    
</div>
</div>
</div>

    <!-- view job setails section ends -->

@endsection
