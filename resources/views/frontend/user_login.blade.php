@extends('layouts.frontend')

@section('title')
 User Login
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

.button {
  background-color: blue;
  color: black;
  border: 4px solid #008CBA;
}
</style>
</head>
<body>
	<div class="container" style="">
		<div class="#" style="margin-top: 20px">
		<h2 class="text-center">Login As</h2>
	
<div class="row">
  <div class="column2"  >
<br><button a href="#" >Owner</a></button> 
   <br><br><button a href="#" >Tenant</a></button> 
   <br><br><button a href="#" >Admin</a></button> 
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
