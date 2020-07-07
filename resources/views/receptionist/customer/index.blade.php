
@extends('layouts.admin')
@section('content')
@role('Receptionist')

        <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Register Customer</h6>
                    </div>
                    <div class="card-body">
                       
                        <form class=" border border-light p-4" action="{{route('customer.store')}}" method="POST">
                           @csrf 
                           <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control mb-2" placeholder="Customer Name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" class="form-control mb-2" placeholder="Eg.9879121212" name="phone">
                                </div>
                           </div>
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control mb-2" placeholder="Eg.Dhapakhel,Lalitpur" name="address">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="days">Duration</label>
                                    <input type="text" id="days" class="form-control mb-2" placeholder="Eg.1" name="days">
                                </div>
                            
                            </div>
                            <div class="text-center">
                                <button class="btn btn-info  mt-3" type="submit">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
         
            <div class="col-md-5">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Available Rooms</h6>
                    </div>
                    <div class="card-body">
                   
                    @foreach($roomType as $ro)
                        <h5 class="font-weight-bold text-dark my-2">{{$ro->room_type .' (Rs.'. $ro->price.')'}}</h5>
                       
                        @foreach($room->where('room_type',$ro->room_type) as $roo)
                       
                        
                        <span class="pr-3 pb-5">{{$roo->room_number}}</span>
                     
                        
                        
                        
                           
                        @endforeach
                        <hr>
                    @endforeach
                   
                  
                    </div>
                </div>
            </div>
        </div>
@else
<div class="pt-5 mt-5 text-center">
<h1 class="text-danger font-weight-bold text-center text-uppercase ">You donot have excess To this page</h1>
<a href="" class="font-weight-bold text-uppercase">Redirect</a>      
</div>
@endrole
@endsection

