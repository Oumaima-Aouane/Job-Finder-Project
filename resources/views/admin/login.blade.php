<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body style="background-color:#0C134F; ">

<div class="forms-container">
       <div class="forms">
        @if (session()->has('success'))
         <div class="msg">
            {{session('success')}}
         </div>
        @endif
       <form action="{{route('loginAd')}}" method="post" class="signIn">
            @csrf
            <h3>login now</h3>
            <p>please fill the inputs for going to admin panel!</p>
            <input type="text" name="email" class="input" placeholder="enter your email">
            <input type="password" name="password" class="input" placeholder="enter your password">
            <p>don't have an account? <span class="signup">sign up</span></p>
            <input type="submit" class="btn" value="login">
        </form>       

        <form action="{{route('storeAdmin')}}" method="post" class="signUp">
            @csrf
            <h3>sign up now</h3>
            <p>please fill the inputs to create your admin account!</p>
           <div class="flex">
            <input type="text" name="fname" class="input" placeholder="enter your first name">
            <input type="text" name="lname" class="input" placeholder="enter your last name">
           </div>
            <input type="email" name="email" class="input" placeholder="enter your email">
           <div class="flex">
           <input type="number" name="number" class="input" placeholder="enter your number">
            <input type="text" name="company" class="input" placeholder="enter your company">

           </div>
            <input type="file" name="image" class="input">
           <input type="password" name="pass" class="input" placeholder="enter your password">
            <input type="password" name="cpass" class="input" placeholder="enter your password">
            <p>already have an account? <span class="login">login</span></p>
            <input type="submit" class="btn" value="sign up">
        </form>
    </div>
</div>
    <a href="{{route('homePage')}}" class="p">go back</a>


    <script>
        let signUp = document.querySelector('.signUp');
        let signIn = document.querySelector('.signIn');

        document.querySelector('.signIn .signup').onclick = () =>{
            signUp.classList.add('active');
            signIn.classList.add('display');
            signIn.classList.remove('active');
        }
        document.querySelector('.signUp .login').onclick = () =>{
            signUp.classList.remove('active');
            signIn.classList.add('active');
        }


    </script>
</body>
</html>