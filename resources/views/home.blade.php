@extends('layout.index')

@section('content')



 <!--Home section starts -->
 <div class="home-container">
    



    <section class="home">
       <div class="box-container">
            <h3>find your next job now</h3>
           
            <p>One simple way to let everyone know you're looking for a new job 
                is to send a letter or email message. Read tips on how to send a
                 letter to your network. Then review a sample letter to send.
                  Use the sample as a template for your own letter,
                 but be sure to change the letter to fit your situation.</p>
            <a href="{{route('about')}}" class="btn">about us</a>
        </div>
     

    </section>
</div>
    <!--Home section ends -->
    
    <!--Jobs section starts -->
  <section class="jobs-container">

        <h3 class="heading">latest jobs</h3>
        <div class="box-container">

   @foreach($jobs as $job)
        <div class="box">
                <div class="company">
                    <img src="images/{{$job->img_path}}" alt="">
                    <div>
                        <h3>{{$job->company}}.</h3>
                        <span>2 days ago</span>
                    </div>
                </div>
             <div class="info">
                <h3 class="job-title">{{$job->title}}</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span>{{$job->city}} </span></p>
             </div>

             <div class="flex-btn">
                <a href="{{route('showOffer',$job->id)}}" class="detail-btn">view details</a>
              
             </div>
            </div>       
    @endforeach
        </div>
        <div style="text-align: center; margin-top: 1rem;">
           <a href="{{route('AllJobs')}}" class="btn">view all</a>
        </div>
      </section>
    <!--Jobs section ends -->

    <!--Category section starts -->

    <section class="category">
        <h1 class="heading"> Job categories </h1>
        <div class="box-container">
   
        <a href="#" class="box">
           <i class="fas fa-code"></i>
           <div>
               <h3>development</h3>
               <span>{{$x[0]}} jobs</span>
           </div>
        </a>
   
        <a href="#" class="box">
        <i class="fa fa-h-square" aria-hidden="true"></i>
           <div>
               <h3>medicine</h3>
               <span>{{$x[2]}} jobs</span>
           </div>
        </a>
        <a href="#" class="box">
        <i class="fa fa-line-chart" aria-hidden="true"></i>
           <div>
               <h3>finance</h3>
               <span>{{$x[4]}} jobs</span>
           </div>
        </a>
   
        <a href="#" class="box">
        <i class="fa fa-book" aria-hidden="true"></i>
           <div>
               <h3>teaching</h3>
               <span>{{$x[5]}} jobs</span>
           </div>
        </a>
   
        <a href="#" class="box">
        <i class="fa fa-motorcycle" aria-hidden="true"></i>
           <div>
               <h3>delivery</h3>
               <span>{{$x[6]}} jobs</span>
           </div>
        </a>
   
        <a href="#" class="box">
        <i class="fa fa-cutlery" aria-hidden="true"></i>
           <div>
               <h3>restaurent</h3>
               <span>{{$x[3]}} jobs</span>
           </div>
        </a>
        <a href="#" class="box">
        <i class="fa fa-coffee" aria-hidden="true"></i>
           <div>
               <h3>waiter</h3>
               <span>{{$x[7]}} jobs</span>
           </div>
        </a>
        <a href="#" class="box">
        <i class="fa fa-child" aria-hidden="true"></i>
           <div>
               <h3>childcarer</h3>
               <span>{{$x[1]}} jobs</span>
           </div>
        </a>
       
       </div>
@foreach($x as $y)
{{$y}} 
@endforeach
       </section>
       <!--Category section ends -->

       
  

       
@endsection