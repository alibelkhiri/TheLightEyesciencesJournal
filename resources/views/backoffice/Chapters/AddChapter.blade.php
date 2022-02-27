@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">New Chapter</div>
                <div class="card-body">
                  @include('layouts.messagesflash')
                  <form action="Chapter/Save" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                      <div class="form-group">
                  <input class="form-control" placeholder="Subject:" name="title">
                </div>
                <div class="form-group">
                  <select class="form-control" name="chapitre_parent" placeholder="Ctaegory" placeholder="Parent chapter">
                    <option value=""></option>
                    @foreach($chapitres as $chap )
                    <option value="{{$chap->id}}">{{$chap->title}}</option>
                    @endforeach
                  </select>
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
