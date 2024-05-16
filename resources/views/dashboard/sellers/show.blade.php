@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Template: {{ $seller->shop_name }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Shop Name</h4>
                        <p>{{ $seller->shop_name }}</p>
                        <h4>Address</h4>
                        <p>{{ $seller->address }}</p>
                        <h4>Content person</h4>
                        <p>{{ $seller->contact_person }}</p>
                        <h4>Content Number</h4>
                        <p>{{ $seller->contact_number }}</p>
                        <h4>Shop Code</h4>
                        <p>{{ $seller->shop_code }}</p>


                        <a href="{{ route('sellers.index') }}" class="btn btn-primary">Return</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection
