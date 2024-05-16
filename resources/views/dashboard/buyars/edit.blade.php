@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit buyar</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('buyars.update', $buyar->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus value="{{ $buyar->name }}"/>
                            </div>
                            <div class="form-group row">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="email" name="email" required value="{{ $buyar->email }}"/>
                            </div>
                            <div class="form-group row">
                                <label>Address</label>
                                <input class="form-control" type="text" placeholder="address" name="address" required value="{{ $buyar->address }}"/>
                            </div>
                            {{-- <div class="form-group row">
                                <label>Mobile Number</label>
                                <input class="form-control" type="text" placeholder="mobile_number" name="mobile_number" required value="{{ $buyar->mobile_number }}"/>
                            </div> --}}
                            <div class="form-group row">
                                <label>Code</label>
                                <input class="form-control" type="text" placeholder="code" name="code" required value="{{ $buyar->code }}"/>
                            </div>
                            
                            <button class="btn btn-success" type="submit">Update</button>
                            <a href="{{ route('buyars.index') }}" class="btn btn-primary">Return</a> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection
