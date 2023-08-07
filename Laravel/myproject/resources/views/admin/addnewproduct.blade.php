@extends('layouts.adminapp')

@section('koibi')
<div class="card">
    <div class="d-flex align-items-end row">
        <div class="col">
            <div class="card-body">
                <h5 class="card-title text-primary">Add New Products</h5>
                <p class="mb-4">
                    <!-- <form action="saveproduct" method="post">
                        @csrf
                        <input type="text" name="_token" value="{{ csrf_token() }}" id="_token">
                        
                        <input type="text" name="product_title" id="product_title">
                        <input type="submit" name="save_product" id="">
                    </form> -->
                    {!! Form::open(['url' => 'saveproduct']) !!}
                    <div class="row">
                        <div class="col-6 my-3">
                            {{ Form::text('product_title','',['class' =>'form-control']);}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 my-3">
                            {{ Form::text('product_price','',['class' =>'form-control']);}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 my-3">
                            {{ Form::text('product_quantity','',['class' =>'form-control']);}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 my-3">
                            {{ Form::text('product_description','',['class' =>'form-control']);}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 my-3">
                            {!! Form::submit('Click Me!') !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </p>
            </div>
        </div>

    </div>
</div>

@endsection