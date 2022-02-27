@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">New Article</div>
                <div class="card-body">
                  @include('layouts.messagesflash')
                  <form action="Articles/Save" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                      <div class="form-group">
                  <input class="form-control" placeholder="Subject:" name="title">
                </div>
                <div class="form-group">
                  <select class="form-control" name="category" placeholder="Ctaegory">
                    @foreach($categories as $cat )
                    <option value="{{$cat->id}}">{{$cat->category}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" name="chapitre" placeholder="chapitre">
                    <option value=""></option>
                    @foreach($chapitres as $chap )
                    <option value="{{$chap->id}}">{{$chap->title}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="article">
                      
                    </textarea>
                </div>
                <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fas fa-paperclip"></i> Picture
                    <input type="file" name="image">
                  </div>
                 
                </div>
              </div>
              <div class="card-footer">
                
               <input type="submit" class="btn btn-success btn-s-xs" value="Save">
              </div>
                </div>
              </form>

            </div>
        </div>
    </div>
</div>

@endsection
