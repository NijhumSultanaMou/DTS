<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    	@yield('title') | Digital To-let System
    </title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

</head>
<body>

     @include('layouts.inc.navbar')
     <div class="content">
     	@yield('content')
     </div>



    <script src="{{ asset('frontend/js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    @yield('scripts')

</body>
</html>