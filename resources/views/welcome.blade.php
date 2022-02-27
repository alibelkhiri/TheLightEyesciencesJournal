@extends('layouts.front')
@section('content')
<main class="container">


  <div class="row g-5">
    <div class="col-md-9">
       
      <div class="row" id="data_temp">
      </div>
      <div class="ajax-load text-center" style="display:none">
      <i class="mdi mdi-48px mdi-spin mdi-loading"></i> Loading ...
      </div>
      <div class="no-data text-center mb-4" style="display:none">
      <b>No data - last page</b>
      </div>
    


      
      <!--<nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled">Newer</a>
      </nav>-->

    </div>

    <div class="col-md-3 brderLeft">
      <div class=" rounded" style="margin-top: 20px">
        <h4 class="fst-italic">Quiz: Anisocorie : Arbre d’orientation diagnsotique ? </h4>
        <a id="myInput" href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('public/images/quiz.jpg')}}" width="100%"/></a>
        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
      </div>
    
        

    </div>
  </div>

</main>
@endsection