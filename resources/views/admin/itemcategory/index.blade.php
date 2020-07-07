
@extends('layouts.admin')
@section('content')
@role('Admin')
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Add Category</h6>
                    </div>
                    <div class="card-body">
                       
                        <form class=" border border-light p-4" action="{{route('category.store')}}" method="POST">
                           @csrf <label for="category_name">Category Name</label>
                            <input type="text" id="category_name" class="form-control mb-2" placeholder="Eg.Momo" name="category_name">
                            <button class="btn btn-info btn-block my-4" type="submit">Add Category</button>
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
                                    <th>Category</th>
                                    <th>Status</th>
                                    
                                </thead>
                                <?php
                                $i=1;
                                ?>
                                @foreach($category as $c)
                                <tbody>
                                    <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$c->category_name}}</td>
                                    <td>{{$c->status}}</td>
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

