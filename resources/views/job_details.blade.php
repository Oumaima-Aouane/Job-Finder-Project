@extends('layout.index')
@section('content')

    <!-- view job setails section starts -->

<div class="job-details">

<h1 class="heading">job details</h1>

<div class="details">

   <img src="images/{{$job->img_path}}" alt="">

    <h3>{{$job->title}}</h3>
    <a href="#">{{$job->company}}</a>
    <p><i class="fas fa-map-marker-alt"></i>{{$job->adress}}</p>

<div class="description">

    <h3>job description</h3>

    <p>
        {{$job->description}}
    </p>

    <div class="flex-btn">
    <form action="{{route('apply',$job->id)}}" method="post" >
    @csrf
     <button type="submit" class="btn">apply now</button>
    </form>

    </div>
  
</div>
</div>
</div>
<!-- view job setails section ends -->


@endsection