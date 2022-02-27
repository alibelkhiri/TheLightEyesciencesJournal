<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>The human</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    

    <!-- Bootstrap core CSS -->
<link href="{{ asset('public/front/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
    
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
.hrali{
  border-top: 2px solid rgb(8, 8, 8);
}
    </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link href="{{ asset('public/front/css/blog.css')}}" rel="stylesheet">
<script>
  
/*const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  var today = new Date();
  
  
  document.getElementById('curentdate').innerText=today;*/
</script>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->

  </head>
  <body>
    
<div class="container">
  <header class="blog-header-details">
    <div class="row flex-nowrap justify-content-between " >
      <div class="col-3 " style="line-height: normal;">
        <!--<a class="link-secondary" href="#" id="curentdate" style="color: black;text-decoration:none;margin-bottum:2px">Tuesday, February 1, 2022</a><br>
        <a class="link-secondary" style="color: black;text-decoration:none;font-size:12px" >Today's Paper</a>
      -->
      </div>
      <div class="col-5 text-center">
        <a class="blog-header-logo text-dark" href="{{url('/')}}">The Light Eyesciences Journal</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a class="btn btn-sm btn-outline-secondary" href="{{ url('/home') }}">My profile</a>
            @else
                
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Login</a>
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
       
      </div>
    </div>
  </header>
</div>

<main class="container">


  <div class="row g-5">
    <div class="col-md-12">
     

      <article class="blog-post brderdown ">
        
            <center>
        <h2 class="blog-post-title" style="text-align: center;color:black">Amblyopia</h2>
        <p class="blog-post-content">This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.
          <br>
          Are you ready for the quiz ? 
        </p>
         
          <img src="{{asset('public/images/hhh.jpg')}}" width="500px">
            </center>
      </article>
    </div></div>
</main>

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<div class="modal" tabindex="-1" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{asset('public/images/ansower.png')}}" width="500px"/>
       
        <p></p>
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <script>
var myModal = document.getElementById('myModal');
var myInput = document.getElementById('myInput');

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
  </script>  
  </body>
</html>
