@extends('layout.index')
@section('content')
 
             
    <!--All Jobs section starts -->

    <section class="jobs-container">

        <h3 class="heading">All jobs</h3>
        <div class="box-container">
            @foreach($jobs as $job)
      
            <div class="box">
                <div class="company">
                    <img src="images/{{$job->img_path}}" alt="">
                    <div>
                        <h3>IT infosys co.</h3>
                        <span>2 days ago</span>
                    </div>
                </div>
             <div class="info">
                <h3 class="job-title">{{$job->title}}</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span>{{$job->city}}</span></p>
             </div>
             <div class="flex-btn">
                <a href="{{route('showOffer',$job->id)}}" class="detail-btn">view details</a>
               
             </div>
            </div>
            @endforeach
</div>
      </section>
    <!--All Jobs section ends -->
@endsection