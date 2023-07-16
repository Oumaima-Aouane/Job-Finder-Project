@extends('layout.index')
@section('content')


<!-- register section starts -->
<div class="account-page">
        
    <div class="content-container">
    </div>
<div class="account-form-container">

    <section class="login-form">
        <form action="{{route('storeUser')}}" method="post">
            @csrf;
            <h3>My Profile</h3>

            <input type="text" required name="name" placeholder="enter your name"
            maxlength="50" class="input">
            <input type="number" required name="number" placeholder="enter your number"
            maxlength="10" class="input">
            <input type="email" required name="email" placeholder="enter your email"
            maxlength="50" class="input">
           
            <p>Please fill all the inputs !</p>
            <input type="submit" value="submit" name="submit" class="btn">
        </form>
     </section>
</div>
</div>
<!--register section ends -->

@endsection