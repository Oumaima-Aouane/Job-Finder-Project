
@extends('admin.admin')
@section('content')


<div class="update-section">
            
          <form action="{{route('updateAdmin',$admin->id)}}" method="POST" >
           @csrf
          @method('PUT')
          <h3>update now</h3>

<input type="text" required name="fullname" value="{{$admin->fullname}}"
maxlength="50" class="input">
<input type="file" required name="pic" value="{{$admin->image}}"
class="input">
 <div class="flex">
     <input type="email" required name="email" value="{{$admin->email}}"
      class="input">
      <input type="password" required name="password" value="{{$admin->password}}"
       class="input">
 </div>
 <div class="flex">
      <input type="number" required name="number" value="{{$admin->number}}"
      class="input">
      
 </div>

<input type="text" class="input"  name="company" value="{{$admin->company}}">


<input type="submit" value="update" name="submit" class="update-btn">
          </form>

</div>

@endsection