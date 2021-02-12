@extends('layouts.frontend')

@section('title')
 User Registration
@endsection


@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


.column1 {
  float: center;
  text-align: center;
  width: 5%;
  padding: 0px;
  height: 0px; 
}
.column2 {
  float: center;
  text-align: center;
  width: 95%;
  padding: 10px;
  height: 550px; 
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
	<div class="container" style="">
		<div class="#" style="margin-top: 20px">
		<h2 class="text-center">Registration As</h2>
	
<div class="row">
  <div class="column2"  >
<br><a href="/Owner/auth/register">Owner</a>
   <br><br><a href="#" >Tenant</a> 
   <br><br><a href="#" >Admin</a> 
  </div>
  </div>
  </div>
</div>

</body>
</html>
@endsection
@section('scripts')
 @include('layouts/inc/footer')
@endsection
