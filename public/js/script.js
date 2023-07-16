let menuBar=document.querySelector('#menu-btn');
let navbar=document.querySelector('.header .flex .navbar');

menuBar.onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');

}

 


