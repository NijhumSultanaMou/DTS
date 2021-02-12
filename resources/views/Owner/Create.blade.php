@extends('layouts.master2')

@section('title')
  Owner
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
<form action="{{route('Owner.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                           
      <div class="container">
         <div class="#" style="margin-top: 20px">
           <h3 class="text-center"><b text=color:red>Property Post</b></h3>

           <div class="row">
            <div class="col-md-6">              
                     <div class="form-group">
                      <label>Owner Name:</label>
                          <input type="text" class="form-control" name="name" placeholder="Owner Name">
                     </div>
                 </div>

                  <div class="col-md-6">              
                     <div class="form-group">
                      <label>Mobile No:</label>
                          <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No">
                     </div>
                 </div>
               </div>


                 <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="division">Division:</label>
                        <select class="form-control" name="division">
                          <option>None</option>
                          <option>Dhaka</option>
                          <option>Rajshahi</option>
                          <option>Rangpur</option>
                          <option>Khulna</option>
                          <option>Chittagong</option>
                          <option>Dinajpur</option>
                          <option>Maymanshing</option>
                          <option>Khulna</option>
                          <option>Sylhet</option>
                        </select>
                    </div> 
                 </div>

                 <div class="col-md-4">  
                    <div class="form-group">
                        <label for="district">District:</label>
                        <select class="form-control" name="district">
                          <option>None</option>
                          <option>Dhaka</option>
                          <option>Rajshahi</option>
                          <option>Rangpur</option>
                          <option>Gaibandha</option>
                          <option>Bogura</option>
                          <option>Dinajpur</option>
                          <option>Kurigram</option>
                          <option>Khulna</option>
                          <option>Naogone</option>
                          <option>Nator</option>
                          <option>Comilla</option>
                          <option>Feni</option>
                        </select>
                    </div>              
                 </div>

               <div class="col-md-4">  
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <select class="form-control" name="location">
                          <option>None</option>
                          <option>Mirpur-10</option>
                          <option>Mirpur-1</option>
                          <option>Mirpur-2</option>
                          <option>Mirpur-11</option>
                          <option>Mirpur-11.5</option>
                          <option>Mirpur-12</option>
                          <option>Dhanmondi-15</option>
                          <option>Dhanmondi-32</option>
                          <option>Dhanmondi-27</option>
                          <option>Sobhanbag</option>
                          <option>Sukrabad</option>
                          <option>Tollabag</option>
                          <option>Mohammadpur</option>
                          <option>Badda</option>
                          <option>Farmgate</option>
                          <option>Greenroad</option>
                          <option>Uttara</option>
                          <option>Banani</option>
                          <option>Gulshan</option>
                          <option>Gulishtan</option>
                          <option>Motijhil</option>
                          <option>Mohakhali</option>
                          <option>Mouchak</option>
                          <option>Paltan</option>
                          <option>Rampura</option>
                          <option>SignBoard</option>
                          <option>Jatrabari</option>
                          <option>Azimpur</option>
                          <option>Shyamoli</option>
                          <option>Kalyanpur</option>
                          <option>Kamlapur</option>
                          <option>Monipuripara</option>
                          <option>Dhanmondi-27</option>
                        </select>
                    </div>              
                 </div>
               </div>

               <div class="row">
                 <div class="col-md-4">  
                    <div class="form-group">
                        <label for="tenant_type">Tenant Type:</label>
                        <select class="form-control" name="tenant_type">
                          <option>None</option>
                          <option>Bachelor</option>
                          <option>Family</option>
                        </select>
                    </div>              
                 </div>
               
 
                    <div class="form-group">
                        <label for="lift">Lift:</label>
                        <select class="form-control" name="lift">
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                    </div>

                     <div class="col-md-4"> 
                      <div class="form-group">
                        <label for="rent">Rent:</label>
                        <input type="number" class="form-control" name="rent" placeholder="Rent(BDT)" min="500">
                        </div>
                    </div>               
                 </div>

               <div class="row">
                    <div class="col-md-4">  
                    <div class="form-group">
                        <label for="room-quantity">Room Quantity:</label>
                        <input type="number" name="room_quantity" class="room_quantity" min="1" max="10">
                    </div>              
                 </div>

                 <div class="col-md-4">  
                    <div class="form-group">
                        <label for="washroom-quantity">Washroom Quantity:</label>
                        <input type="number" name="washroom_quantity" class="washroom_quantity" min="1" max="10">
                    </div>              
                 </div>

                  <div class="col-md-4">  
                    <div class="form-group">
                        <label for="balcony_quantity">Balcony Quantity:</label>
                        <input type="number" name="balcony_quantity" class="balcony_quantity" min="1" max="10">
                    </div>              
                 </div>

                 <div class="col-md-4">  
                    <div class="form-group">
                        <label for="floor">Floor:</label>
                        <input type="number" name="floor" class="floor" min="1" max="10">
                    </div>              
                 </div>
                
               </div>


               <div class="row"> 
                    <div class="col-md-4">
                    <lebel>Home Image:</lebel>
                     <div class="custom-file">               
                       <input type="file" name="image" class="custom-file-input">
                     <label class="custom-file-label">Choose file</label>
                    </div>
                  </div>
                    </div>

                 <div class="row"> 
                  <div class="col-md-4">  
                    <div class="form-group">
                    <label for="More">More:</label>
                     <textarea id="more" name="more" placeholder="Write something.." style="width:200px"></textarea>
                    </div>              
                    </div>
                  </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
              </div>
            </div>
            </form>
             @endsection

@section('scripts')
<!-- @include('layouts/inc/footer') -->
@endsection