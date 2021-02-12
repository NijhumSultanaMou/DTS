@extends('layouts.master')


@section('title')
    Necessity View | Digital To-let system 
@endsection

@section('content')

 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Tenant Necessity</h4>
                    <div class="alert alert-success" role="alert">
                    </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class=" text-primary">
                    <th>Tenant Name</th>
                    <th>Modile No</th>
                    <th>Division</th>
                    <th>District</th>
                    <th>Location</th>
                    <th>Tenant Type</th>
                    <th>Budget</th>
                    <th>Home</th>
                    <th>Washroom</th>
                    <th>Balcony</th>
                    <th>More</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>

                @foreach($necessity as $n)
                <tr>
                    <td>{{ $n->name }}</td>
                    <td>{{ $n->mobile }}</td>
                    <td>{{ $n->division }}</td>
                    <td>{{ $n->district }}</td>
                    <td>{{ $n->location }}</td>
                    <td>{{ $n->tenant_type }}</td>
                    <td>{{ $n->budget }}</td>
                    <td>{{ $n->home }}</td>
                    <td>{{ $n->washroom }}</td>
                    <td>{{ $n->balcony }}</td>
                    <td>{{ $n->more }}</td>
                            <td>
                          <a href="{{ route('Admin.necessity_edit',['id'=>$n->id])}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                           <a href="{{ route('Admin.deleted',['id'=>$n->id])}}" class="btn btn-danger">x</a>
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
