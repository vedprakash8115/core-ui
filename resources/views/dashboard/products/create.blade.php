@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Template</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus/>
                            </div>
                            <div class="form-group row">
                                <label>Subject</label>
                                <input class="form-control" type="text" placeholder="cost" name="cost" required/>
                            </div>
                            <div class="form-group row">
                                <label>Subject</label>
                                <input class="form-control" type="text" placeholder="category" name="category_id" required/>
                            </div>
                            <div class="form-group row">
                                <label>Subject</label>
                                <input class="form-control" type="text" placeholder="product code" name="product_code" required/>
                            </div>
                           
                            
                            <button class="btn btn-success" type="submit">Add</button>
                            <a href="{{ route('mail.index') }}" class="btn btn-primary">Return</a> 
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
