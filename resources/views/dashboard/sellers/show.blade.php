@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Template: {{ $sellers->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Name</h4>
                        <p>{{ $sellers->short_name }}</p>
                        <h4>Subject</h4>
                        <p>{{ $sellers->short_name }}</p>
                        <h4>Content</h4>
                        <p>{{ $sellers->code }}</p>


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
