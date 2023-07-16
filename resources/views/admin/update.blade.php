
@extends('admin.admin')
@section('content')


<div class="update-section">
            
          <form action="{{route('updateOffer',[$admin->id,$offer->id])}}" method="POST" >
           @csrf
          @method('PUT')
          <h3>update now</h3>

<input type="text" required name="title" value="{{$offer->title}}"
maxlength="50" class="input">
<input type="file" required name="pic" value="{{$offer->img_path}}"
class="input">
 <div class="flex">
     <input type="text" required name="adress" value="{{$offer->adress}}"
      class="input">
      <input type="text" required name="company" value="{{$offer->company}}"
       class="input">
 </div>
 <div class="flex">
      <input type="text" required name="city" value="{{$offer->city}}"
      class="input">
      
      <select name="category" class="input">
               
               <option value="developement">developement</option>
               <option value="medicine">medicine</option>
               <option value="finance">finance</option>
               <option value="teaching">teaching</option>
               <option value="delivery">delivery</option>
               <option value="restaurent">restaurent</option>
               <option value="waiter">waiter</option>
               <option value="childcarer">childcarer</option>

           </select>
 </div>
<textarea name="desc" class="input" cols="30" rows="10">{{$offer->description}}</textarea>

<input type="hidden"  name="admin_id" value="{{$offer->admin_id}}">


<input type="submit" value="update" name="submit" class="update-btn">
          </form>

</div>

@endsection