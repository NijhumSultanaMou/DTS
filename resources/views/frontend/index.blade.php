@extends('layouts.frontend')

@section('title')
   Home
@endsection


@section('content')
   
   @include('frontend/slider')
   <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
   <div class="container">
   	  <div class="row">
   		 <div class="col-md-12 text-center">

   			<marquee><h1>Welcome to Digital To-let System</h1></marquee>
   		 </div>
   	 </div>
   </div>
</nav>
   @include('layouts/inc/footer')
   
@endsection

@section('scripts')

@endsection