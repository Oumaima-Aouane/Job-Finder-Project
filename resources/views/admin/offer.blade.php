@extends('admin.admin')
@section('content')


<div class="container-section">
<div class="jobs">
   <div class="jobs-header">
   <h3><i class="fa fa-handshake"></i> offers<span> ></span></h3>
    <a href="{{route('createOffer',$admin->id)}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
   </div>



 
            <table class="table">
            <tr><th>company</th><th>date</th><th>title</th><th>city</th><th>detail</th></tr>
            @foreach($offers as $offer)
                <tr>
                  <td><h3>{{$offer->company}}</h3></td>
                  <td><span>2 days ago</span></td>
                  <td><p class="job-title">{{$offer->title}}</p></td>
                  <td><p class="location"><i class="fas fa-map-marker-alt"></i><span>{{$offer->city}}</span></p></td>
                  <td><a href="{{route('offerDetails',[$admin->id,$offer->id])}}" class="detail-btn">view details</a></td>
                  <td><a href="{{route('editOffer',[$admin->id,$offer->id])}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                  <td>
                  
                     <i class="fa fa-trash" aria-hidden="true"></i>
               
                  </td>
                  <td><button class="fa fa-toggle-off" aria-hidden="true"></button></td>
               </tr>
            @endforeach
           </table> 
</div>
</div>

<!--  -->

<div class="delete-container">

<i class="fa fa-circle-minus"></i>
<h3> are you sure ?</h3>
 <P>do you really want to delete this offer ?</P>

      <div class="flex-btn">
      <form action="{{route('destroyOffer',[$admin->id,$offer->id])}}" >
         <input type="submit" class="deleteIt" value="yse, delete it">
      </form>
         <a href="#" class="dontDeleteIt">cancel</a>
      </div>
</div>


<script>



let deleteBox=document.querySelector('.delete-container');
let doDelete=document.querySelectorAll('.jobs .table .fa-trash');
let jobsContainer=document.querySelector('.jobs');

doDelete.forEach(del => {
   del.onclick = () =>{
       deleteBox.classList.add('show');
       jobsContainer.classList.add('bg');
   }
});

let cancel=document.querySelector('.dontDeleteIt');


cancel.onclick = () =>{
   deleteBox.classList.remove('show');
   jobsContainer.classList.remove('bg');
};

let faTogglesOff=document.querySelectorAll('.fa-toggle-off');

faTogglesOff.forEach(faToggle => {
     
     faToggle.onclick=()=>{
     faToggle.classList.toggle('fa-toggle-on');
     faToggle.classList.toggle('fa-toggle-off');
     
}});



</script>



@endsection