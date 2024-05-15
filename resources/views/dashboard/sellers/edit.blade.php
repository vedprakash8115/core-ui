@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit sellers</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sellers.update', $seller->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="shop_name" required autofocus value="{{ $seller->shop_name }}"/>
                            </div>
                            <div class="form-group row">
                                <label>Subject</label>
                                <input class="form-control" type="text" placeholder="Subject" name="address" required value="{{ $seller->address }}"/>
                            </div>
                            <div class="form-group row">
                                <label>Subject</label>
                                <input class="form-control" type="text" placeholder="Subject" name="contact_person" required value="{{ $seller->contact_person }}"/>
                            </div>
                            <div class="form-group row">
                                <label>Subject</label>
                                <input class="form-control" type="text" placeholder="Subject" name="contact_number" required value="{{ $seller->contact_number }}"/>
                            </div>
                            <div class="form-group row">
                                <label>Subject</label>
                                <input class="form-control" type="text" placeholder="Subject" name="shop_code" required value="{{ $seller->shop_code }}"/>
                            </div>
                            
                            <button class="btn btn-success" type="submit">Update</button>
                            <a href="{{ route('sellers.index') }}" class="btn btn-primary">Return</a> 
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
