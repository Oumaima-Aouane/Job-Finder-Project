@extends('admin.admin')
@section('content')
<div class="container">
   
<div class="jobs">
   <div class="jobs-header">
   <h3><i class="fa fa-user"></i> your account  <span> ></span></h3>
   </div>

           <!--  <div class="box">-->

            <table class="table">
               <tr><th>full name</th><th>number</th><th>email</th><th>password</th><th>company</th></tr>
               <tr>
                  <td><h3>{{$admin->fullname}}</h3></td>
                  <td>{{$admin->number}}</td>
                  <td>{{$admin->email}}</td>
                  <td>{{$admin->password}}</p></td>
                  <td>{{$admin->company}}</td>
                  <td><a href="{{route('editAdmin',$admin->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                  <td><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                 
               </tr>
            </table>

</div>
</div>

<div class="delete-container">

<i class="fa fa-circle-minus"></i>
<h3> are you sure ?</h3>
 <P>do you really want to delete this offer ?</P>

      <div class="flex-btn">
      <form action="{{route('destroyadmin',$admin->id)}}" >
         <input type="submit" class="deleteIt" value="yes, delete it">
      </form>
         <a href="#" class="dontDeleteIt">cancel</a>
      </div>
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