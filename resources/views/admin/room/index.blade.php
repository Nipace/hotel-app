
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
                       
                        <form class=" border border-light p-4" action="{{route('rooms.store')}}" method="POST">
                           @csrf <label for="room_number">Room Number</label>
                            <input type="text" id="room_number" class="form-control mb-2" placeholder="Room type" name="room_number">
                            <label for="room_type">Room Type</label>
                            <select class="browser-default custom-select" name="room_type">
                            <option selected>Select</option>
                            @foreach($roomType as $roomType)
                                <option value="{{$roomType->room_type}}">{{$roomType->room_type}}</option>
                                @endforeach
                            </select>
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
                                    <th>Room Number</th>
                                    <th>Room Type</th>
                                    
                                </thead>
                                <?php
                                $i=1;
                                ?>
                                @foreach($room as $room)
                                <tbody>
                                    <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$room->room_number}}</td>
                                    <td>{{$room->room_type}}</td>
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

