
@extends('layouts.admin')
@section('content')
@role('Waiter')
<div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Add Quantity</h6>
                    </div>
                    <div class="card-body">
                        <form class=" border border-light p-4 " action="{{route('order.save',[$room,$category,$item])}}" method="POST">
                        <div class=" row justify-content-center">
                            <table>
                                <tr>
                                    <td><span class="pr-3 font-weight-bold text-dark">Item</span></td>
                                    <td>{{$item}}</td>
                                </tr>
                                <tr >
                                    <td class="py-3"><span class="pr-3 font-weight-bold text-dark">Quantity</span></td>
                                    <td>  
                                        <button type="button" id="sub" class="btn-danger sub">-</button>
                                        <input type="number" class="form-control-sm" name="quantity"id="1" value="1" min="1" max="100" />
                                        <button type="button" id="add" class="btn-success add">+</button>
                                    </td>
                                </tr>
                                <tr >
                                    <td class="py-2"><span class="pr-3 font-weight-bold text-dark">Price</span></td>
                                    <td>  
                                    @foreach($price as $p)
                                        {{$p->item_price}}
                                        @endforeach
                                    </td>
                                </tr>
                                <tr >
                                    <td class="py-2"><span class="pr-3 font-weight-bold text-dark">Note</span></td>
                                    <td>  
                                        <input type="text" class="form-control-sm" name="note">
                                    </td>
                                </tr>
                            </table>
                        </div>
                           @csrf 
                                <div class="text-center">
                                    <button class="btn btn-danger  mt-3 mr-5" type="submit" name="action" value="back">Back</button>
                                    <button class="btn btn-success  mt-3" type="submit" name="action" value="next">Next</button>
                                    <button class="btn btn-info  mt-3" type="submit" name="action" value="ok">OK</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>







    
<script>
$('.add').click(function () {
		if ($(this).prev().val() < 100) {
    	$(this).prev().val(+$(this).prev().val() + 1);
		}
});
$('.sub').click(function () {
		if ($(this).next().val() > 1) {
    	if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		}
});
</script>  
@else
<div class="pt-5 mt-5 text-center">
<h1 class="text-danger font-weight-bold text-center text-uppercase ">You donot have excess To this page</h1>
<a href="" class="font-weight-bold text-uppercase">Redirect</a>      
</div>
@endrole
@endsection

