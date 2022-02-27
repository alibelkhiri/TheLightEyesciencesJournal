@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">New Chapter</h3><br>
                  <a href="{{url('/AddChapter')}}" class="btn btn-success align-right">New Article</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Titre</th>
                      <th>Parent</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($chapitres as $chap)   
                    <tr>
                      <td>{{$chap->id}}</td>
                      <td>{{$chap->title}} </td>
                      <td>
                        @if($chap->chapitre_parent!=null)
                         {{$chap->Parent->title}}
                        @endif
                      </td>
                      <td>
                        <!--<a href="{{url('/ArticleEdit/'.$chap->id)}}">Update</a>-->
                        <form action="{{url('/ChapterDelete/'.$chap->id)}}" method="GET">
                        <button type=" submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Titre</th>
                     
                      <th>Actions</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
        </div>
    </div>
</div>
@endsection
