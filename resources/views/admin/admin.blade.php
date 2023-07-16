<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- header section starts -->
<!-- 
<div class="admin-header">

    
     
   
</div> -->

<!-- header section ends -->


<div class="admin-infos">
    <div class="img">
    <img src="images/bg4.jpg" alt="">
    </div>
    <h3>{{$admin->fullname}}</h3>
    <a href="{{route('loginAdmin')}}" class="logout">log out</a>
</div>
<!-- side Bar section starts -->
<div class="sideBar">
          <div class="box-container">
            <div class="box">
                <a href="{{route('dash',$admin->id)}}"><i class="fa fa-tachometer" aria-hidden="true"></i>dashboard</a>
            </div>
            <div class="box">
                <a href="{{route('offer',$admin->id)}}"><i class="fa fa-handshake" aria-hidden="true"></i>offers</a>
            </div>
            <div class="box">
                <a href="{{route('candidate',$admin->id)}}"><i class="fa fa-user-circle" aria-hidden="true"></i>candidats</a>
            </div>
            <div class="box">
                <a href="{{route('adminAccount',$admin->id)}}"><i class="fa fa-address-book" aria-hidden="true"></i>accounts</a>
            </div>

          </div>
    </div>



<!-- side Bar section ends -->

   @yield('content')
  
<script>

    
let boxs=document.querySelectorAll('.sideBar .box-container .box');

boxs.forEach(box => {
    box.onclick= () =>{
       box.classList.add('active');
    }
});


</script>
<script src="js/script.js"></script>

</body>
</html>