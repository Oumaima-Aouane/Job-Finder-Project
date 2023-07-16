<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <!--header section starts -->
    <header class="header">
        <section class="flex">

            <div id="menu-btn" class="fas fa-bars-staggered"></div>
            <a href="/" class="logo"><i class="fa fa-briefcase" aria-hidden="true"></i> jobFinder. </a>
            
           
    
         <nav class="navbar">

            <a href="/">home</a>
            <a href="/jobs">all jobs</a>
            <a href="/about">about us</a>
            
         </nav>

        <div class="flex-btn">
            <a href="{{route('CUser')}}" class="btn signin">my profile</a>
            <a href="{{route('loginAdmin')}}" class="btn">post</a> 
        </div>


    </section>

            
    </header>
    <!--header section ends -->

<div class="body">
@yield('content')
</div>
    <!--footer section starts -->
      <footer class="footer">
        <section class="grid">

            <div class="box">
                <h3>quick links</h3>
                <a href="/"><i class="fas fa-angle-right"></i>Home</a>
                <a href="/about"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="/jobs"><i class="fas fa-angle-right"></i>All Jobs</a>
              

            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="/login"><i class="fas fa-angle-right"></i>my profile</a>
                <a href="#"><i class="fas fa-angle-right"></i>post job</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>

        </section>
        <div class="credit">&copy; copyright @2023 by <span>AOUANE Oumaima </span> & <span>EL KORAIFI Chaimaa</span> | all rights reserved</div>
      </footer>
    <!--footer section ends -->

    <script src="js/script.js"></script>
</body>
</html>