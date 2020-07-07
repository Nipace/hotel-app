
@extends('layouts.admin')
@section('content')
@role('Admin')
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Add Items</h6>
                    </div>
                    <div class="card-body">
                       
                        <form class=" border border-light p-4" action="{{route('items.store')}}" method="POST">
                           @csrf <label for="item_name">Item Name</label>
                            <input type="text" id="item_name" class="form-control mb-2" placeholder="Eg. Veg momo" name="item_name">
                            <label for="price">Price</label>
                            <input type="text" id="price" class="form-control mb-2" placeholder="Price" name="price">
                            <label for="item_category">Item Category</label>
                            <select class="browser-default custom-select" name="item_category">
                            <option selected>Select</option>
                            @foreach($category as $c)
                                <option value="{{$c->category_name}}">{{$c->category_name}}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-info btn-block my-4" type="submit">Add Items</button>
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
                                    <th>Item</th>
                                    <th>Price</th>
                                    
                                </thead>
                                <?php
                                $i=1;
                                ?>
                                @foreach($item as $item)
                                <tbody>
                                    <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->item_name}}</td>
                                    <td>{{$item->item_price}}</td>
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

