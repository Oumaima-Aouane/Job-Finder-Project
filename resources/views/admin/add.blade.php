@extends('admin.admin')

@section('content')

<div class="add">
<form action="{{route('storeOffer')}}" method="post">
           
<h3>add a new offer</h3>
   @csrf
           <div class="flex-container">
           <div class="flex">
           <input type="text" required name="title" placeholder="enter offer's title"
            maxlength="50" class="input">
            <input type="file" required name="pic" placeholder="choose a picture"
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
         <div class="flex">
            <input type="text" required name="adress" placeholder="enter the adress" class="input">
            <input type="text" required name="company" placeholder="enter the company" class="input">
            <input type="hidden" required name="admin_id" value="{{$admin->id}}" >
        
             <input type="text" required name="city" placeholder="choose a city"
             class="input">
           </div>
         </div>
            <textarea name="desc" class="input" cols="30" rows="10" placeholder="write the description here ...."></textarea>
            <input type="hidden" required name="rec-id">
        
            <button type="submit" class="btn" >add</button>

        </form>
</div>
@endsection