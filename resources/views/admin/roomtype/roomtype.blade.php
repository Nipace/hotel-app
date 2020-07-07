
@extends('layouts.admin')
@section('content')
@role('Admin')
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Add Room Types</h6>
                    </div>
                    <div class="card-body">
                       
                        <form class=" border border-light p-4" action="{{route('roomtypes.store')}}" method="POST">
                           @csrf <label for="roomtype">Room Type</label>
                            <input type="text" id="roomtype" class="form-control mb-2" placeholder="Room type" name="room_type">
                            <label for="price">Price</label>
                            <input type="text" id="price" class="form-control mb-2" placeholder="Price" name="price">
                            <button class="btn btn-info btn-block my-4" type="submit">Add Room Type</button>
                        </form>

                    </div>
                </div>
            </div>
     
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Room Type</th>
                                    <th>Price</th>
                                    
                                </thead>
                                <?php
                                $i=1;
                                ?>
                                @foreach($roomType as $roomType)
                                <tbody>
                                    <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$roomType->room_type}}</td>
                                    <td>{{$roomType->price}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
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

