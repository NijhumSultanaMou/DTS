@extends('layouts.master')


@section('title')
    Create Blog | Digital To-let system 
@endsection


@section('content')
@if(count($errors)>0)

     <ul class="list-group">
  @foreach($errors->all() as $error)
  <li class="list-group-item text-danger">
    {{ $error }}
  </li> 
  @endforeach
</ul>  
@endif  
<form action="{{route('Admin.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}        
      <div class="container">
         <div class="#" style="margin-top: 20px">
           <h3 class="text-center"><b text=color:red>Create Blogs</b></h3>

           <div class="row">
            <div class="col-md-6">              
                     <div class="form-group">
                      <label>Area Name</label>
                          <input type="text" class="form-control" name="area_name" placeholder="Enter Area Name">
                     </div>
                 </div>

                  <div class="col-md-6">              
                     <div class="form-group">
                      <label>Blogs</label>
                          <input type="text" class="form-control" name="blogs" placeholder="write somethings">
                     </div>
                 </div>
               </div>
                </div>
                  <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
               
                 </div>
                </from>
                <br>  
                <br>
                <br>



@endsection


@section('scripts')

@endsection