
@extends('layouts.admin')
@section('content')
@role('Receptionist')

        <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Add Rooms</h6>
                    </div>
                    <div class="card-body"><?php
                     $id=request()->route('id')
                    ?>
                        <form class=" border border-light p-4" action="{{route('room.add',$id)}}" method="POST">
                           @csrf 
                           <div class="row">
                           @foreach($roomType as $s)
                                <div class="col-md-12 my-2">
                                    <label for="days" class="text-dark font-weight-bold">{{$s->room_type}}</label><br>
                                        @foreach($room->where('room_type',$s->room_type) as $p)
                                            <input type="checkbox" class="pr-5" value="{{$p->room_number}}" name="room[]">{{$p->room_number}}<span class="mr-2"></span></input>
                                        @endforeach
                                        <hr>                          
                                </div>    
                                @endforeach
                        </div>
                                <div class="text-center">
                                <button class="btn btn-info  mt-3" type="submit">Register</button>
                                </div>
                        </form>
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

