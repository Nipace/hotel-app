
@extends('layouts.admin')
@section('content')
@role('Waiter')
<div class="row">


@foreach($category as $r)

            <div class="col-xl-2 col-md-4 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
                      <div class="h6 mb-0 font-weight-bold text-gray-600">{{$r->category_name}}</div>
                    </div>
                    <!-- <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div> -->
                    <a href="{{route('order.item',[$room,$r->category_name])}}" class="stretched-link"></a>
                  </div>
                </div>
              </div>
            </div>
            
            @endforeach
  
    </div>
  
          
@else
<div class="pt-5 mt-5 text-center">
<h1 class="text-danger font-weight-bold text-center text-uppercase ">You donot have excess To this page</h1>
<a href="" class="font-weight-bold text-uppercase">Redirect</a>      
</div>
@endrole
@endsection

