@extends('layouts.adminapp')

@section('koibi')
<div class="card">
    <div class="d-flex align-items-end row">
        <div class="col">
            <div class="card-body">
                
                <div class="row">
                    <div class="col-10">
                        <h5 class="card-title text-primary">All Products</h5>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-sm btn-primary" href="addnewproductview">Add New</a>
                    </div>
                </div>
                <p class="mb-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th class="text-light">Title</th>
                                    <th class="text-light">Description</th>
                                    <th class="text-light">Price</th>
                                    <th class="text-light">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($AllProducts as $data)
                                 <tr>
                                     <td>{{$data->product_title }}</td>
                                     <!-- <td>{{$data->product_description }}</td> -->
                                     <td title={{$data->product_description}}>{{ Str::limit($data->product_description, 10) }}</td>
                                     <td>{{$data->product_price }}</td>
                                     <td>
                                        <a class="btn btn-sm btn-primary" href="edituser/{{$data->id }}">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="edituser/{{$data->id }}">Delete</a>
                                        
                                    </td>
                                 </tr>
                               @endforeach 
                            </tbody>
                        </table>
                    </div>
                </p>
            </div>
        </div>
      
    </div>
</div>

@endsection