@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Template: {{ $buyar->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Name</h4>
                        <p>{{ $buyar->name }}</p>
                        <h4>Email</h4>
                        <p>{{ $buyar->email }}</p>
                        <h4>Address</h4>
                        <p>{{ $buyar->address }}</p>
                        <h4>Code</h4>
                        <p>{{ $buyar->code }}</p>


                        <a href="{{ route('buyars.index') }}" class="btn btn-primary">Return</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection
