@extends('layouts.master')


@section('title')
    Property View | Digital To-let system 
@endsection


@section('content')
    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Property Post</h4>
                    <div class="alert alert-success" role="alert">
                    </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class=" text-primary">
                    <th>Owner Name</th>
                    <th>Modile No</th>
                    <th>Division</th>
                    <th>District</th>
                    <th>Location</th>
                    <th>Tenant Type</th>
                    <th>Lift</th>
                    <th>Rent</th>
                    <th>Room-Quantity</th>
                    <th>Washroom-Quantity</th>
                    <th>Balcony-Quantity</th>
                    <th>Floor</th>
                    <th>Image</th>
                    <th>More</th>
                     <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>

                @foreach($property as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->mobile }}</td>
                    <td>{{ $p->division }}</td>
                    <td>{{ $p->district }}</td>
                    <td>{{ $p->location }}</td>
                    <td>{{ $p->tenant_type }}</td>
                    <td>{{ $p->lift }}</td>
                    <td>{{ $p->rent }}</td>
                    <td>{{ $p->room_quantity }}</td>
                    <td>{{ $p->washroom_quantity }}</td>
                    <td>{{ $p->balcony_quantity }}</td>
                    <td>{{ $p->floor}}</td>
                    <td><img src="{{ asset('uploads/property/' . $p->image) }}" width="100px" height="50px" alt="Image"></td>
                        <td>{{ $p->more }}</td>
                            <td>
                          <a href="{{ route('Admin.property_edit',['id'=>$p->id])}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                           <a href="{{ route('Admin.deletes',['id'=>$p->id])}}" class="btn btn-danger">x</a>
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
