@extends('layout.index')

@section('content')
<style>
    
/* apply css code */

.form-container{
    margin: 2rem;
    max-width: 80%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.form-container form{
    background-color: var(--white);
    padding: 3rem;
    min-width: 100%;
}
.form-container form .flex{
    display: flex;
    align-items: center;
    justify-content: space-between;  
    gap:2rem ;
    width: 100%;
}
.form-container form .flex .box{
    display: grid;
    width: 100%;
   
}
.form-container form .flex .box .input{
    width: 100%;
}
.form-container form span{
    color: var(--liht-color);
    font-size: 1.3rem;
    text-transform: lowercase;
}
.form-container form span i{
    color: var(--light-red);
    font-size: 1.5rem;
    padding-right: .5rem;
}
.form-container form .input{
    width: 100%;
    background-color: var(--white);
    border: .1rem solid var(--main-color);
    padding: 1rem;
    color: #212A3E;
    font-size: 1.6rem;
    margin: 1rem;
    border-radius: 1rem;

}
.form-container form .input:focus{
    border: .1rem solid var(--light-red);
    border-radius: 0;
    background-color: var(--black);
    color: var(--white);
    box-shadow: var(--box-shadow);
}
.form-container textarea{
    max-height: 15rem;
    resize: none;
}
.form-container form .apply{
    font-size: 2rem;
    padding: 1rem 2rem;
    border: var(--border);
    color:var(--white);
    text-align: center;
    background-color: #394867;
    box-shadow: var(--box-shadow);
    width: 15rem;
    border: .4rem solid #F1F6F9;
    text-transform: uppercase;
}
.form-container form .apply:hover{
    background-color: #212A3E ;
    border-radius: 1rem;
    border: var(--border);
    
}

.form-container form h2{
    font-size: 3rem;
    text-align: center;
    color: var(--black);
    text-transform: capitalize;
    margin-bottom: 4rem;
    text-decoration: underline;

}
.cont{
    display: flex;
    align-items: center;
    justify-content: center;
}


</style>
<div class="cont">
<div class="form-container">

<form action="{{route('storeCandidate')}}" method="post">
    @csrf
    <h2>apply now</h2>
    <input type="hidden" name="job-id" >
     <div class="flex">
        <div class="box">
            <span>firstname <i>*</i>:</span>
            <input type="text" name="fname" class="input" placeholder="enter your name">
        </div>
        <div class="box">
            <span>lastname <i>*</i>:</span>
            <input type="text" name="lname" class="input" placeholder="enter your name">
        </div>
     </div>
    <div class="flex">
        <div class="box">
           <span>email <i>*</i>:</span>
           <input type="email" name="email" class="input" placeholder="enter your email">
        </div>
        <div class="box">
            <span>number <i>*</i>:</span>
            <input type="number" name="number" class="input" placeholder="enter your number">
            
            </div>

        <input type="hidden" name="offerId" class="input" value="{{$job->id}}">
    </div>
     <span>adress :</span>
     <input type="text" name="adress" class="input" placeholder="enter your adress">
      <span>cv <i>*</i>:</span>
     <input type="file" name="cv" class="input" >
     <span>letter :</span>
     <textarea name="letter" class="input" cols="30" rows="10" placeholder="write your letter here ..."></textarea>
    
     <input type="submit" class="apply" value="apply" name="send"> 
</form>

</div>
</div>

@endsection