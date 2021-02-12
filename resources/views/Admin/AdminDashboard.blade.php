@extends('layouts.master')


@section('title')
    Dashboard | Digital To-let system 
@endsection


@section('content')


     <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class=" text-primary">
                      <th> Name </th>
                      <th> Age </th>
                      <th> City </th>
                      <th> Address </th>
                    </thead>

                    <tbody>
                      <tr>
                        <td> Mou </td>
                        <td> 21 </td>
                        <td> Bogura </td>
                        <td> Santahar </td>
                      </tr>
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