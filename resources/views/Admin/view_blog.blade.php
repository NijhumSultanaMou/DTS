@extends('layouts.master')


@section('title')
    Blog | Digital To-let system 
@endsection


@section('content') 

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Blog</h4>
                    <div class="alert alert-success" role="alert">
                    </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class=" text-primary">
                    <th>Area name</th>
                    <th>Blog</th>
                     <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>

                @foreach($blog as $b)
                <tr>
                    <td>{{ $b->area_name }}</td>
                    <td>{{ $b->blog }}</td>
                            <td>
                          <a href="{{ route('Admin.blog_edit',['id'=>$b->id])}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                           <a href="{{ route('Admin.delete',['id'=>$b->id])}}" class="btn btn-danger">x</a>
                        </td>
                </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

 @endsection

@section('scripts')
@endsection