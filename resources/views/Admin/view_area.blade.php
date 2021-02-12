@extends('layouts.master')


@section('title')
    Area Guide | Digital To-let system 
@endsection


@section('content') 

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Area Guide</h4>
                    <div class="alert alert-success" role="alert">
                    </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class=" text-primary">
                    <th>Area name</th>
                    <th>Youtube Link</th>
                     <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>

                @foreach($area as $a)
                <tr>
                    <td>{{ $a->area_name }}</td>
                    <td>{{ $a->youtube_links }}</td>
                            <td>
                          <a href="{{ route('Admin.area_edit',['id'=>$a->id])}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                           <a href="{{ route('Admin.delete',['id'=>$a->id])}}" class="btn btn-danger">x</a>
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