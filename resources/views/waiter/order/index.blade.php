
@extends('layouts.admin')
@section('content')
@role('Waiter')
<div class="row">
@foreach($roomType as$rt)

@foreach($room->where('room_type',$rt->room_type) as $r)

            <div class="col-xl-2 col-md-4 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Room Number</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$r->room_number}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                    <a href="{{route('order.category',$r->room_number)}}" class="stretched-link"></a>
                  </div>
                </div>
              </div>
            </div>
            
            @endforeach
    @endforeach
    </div>
  
          
@else
<div class="pt-5 mt-5 text-center">
<h1 class="text-danger font-weight-bold text-center text-uppercase ">You donot have excess To this page</h1>
<a href="" class="font-weight-bold text-uppercase">Redirect</a>      
</div>
@endrole
@endsection

