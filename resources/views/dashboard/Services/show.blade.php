@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Template: {{ $service->shop_name }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Name</h4>
                        <p>{{ $service->name }}</p>
                        <h4>Code</h4>
                        <p>{{ $service->code }}</p>
                        <h4>Category</h4>
                        <p>{{ $service->category_id }}</p>
                        <h4>Price</h4>
                        <p>{{ $service->price }}</p>
                        

                        <a href="{{ route('services.index') }}" class="btn btn-primary">Return</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection
