@extends('admin.admin')
@section('content')

<div class="container-section">

<div class="jobs">
<div class="jobs-header">
   <h3><i class="fa fa-handshake"></i> candidates<span> ></span></h3>
   </div>
<table class="table">
               <tr><th>offer title</th><th>full name</th><th>email</th><th>number</th><th>cv</th><th>details</th></tr>
              @foreach($candidates as $candidate)
               <tr>
                  <td>{{$candidate->offerTitle}}r</td>
                  <td>{{$candidate->full_name}}</td>
                  <td>{{$candidate->email}}</td>
                  <td>{{$candidate->number}}</td>
                  <td>{{$candidate->cv}}</td>
                  <td><a href="{{route('candidateDetails',[$admin->id,$candidate->id])}}" class="detail-btn">view details</a></td>
                  <td><i class="fa fa-trash" aria-hidden="true"></i></td>
               
<div class="delete-container">

<i class="fa fa-circle-minus"></i>
<h3> are you sure ?</h3>
 <P>do you really want to delete this offer ?</P>

      <div class="flex-btn">
      <form action="{{route('destroyCandidate',[$admin->id,$candidate->id])}}" >
         <input type="submit" class="deleteIt" value="yse, delete it">
      </form>
         <a href="#" class="dontDeleteIt">cancel</a>
      </div>
</div>
               </tr>
        
         @endforeach
           </table>
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
</script>
@endsection