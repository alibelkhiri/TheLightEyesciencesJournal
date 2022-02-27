@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Les actualitées</h3><br>
                  <a href="{{url('/AddNews')}}" class="btn btn-success align-right">New Article</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Titre</th>
                      <th>Category</th>
                      <th>Chapitre</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($news as $new)   
                    <tr>
                      <td>{{$new->id}}</td>
                      <td>{{$new->title}} </td>
                      <td>{{$new->getcategory->category}}</td>
                      <td>
                       
                         {{$new->Chapter->title}}
                        
                        </td>
                      <td>
                        <a href="{{url('/ArticleEdit/'.$new->id)}}" class="btn btn-warning">Update</a>
                        <form action="{{url('/ArticleDelete/'.$new->id)}}" method="GET">
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
                      <th>Category</th>
                      <th>Chapitre</th>
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
