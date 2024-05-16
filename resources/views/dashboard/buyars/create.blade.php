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
                        <form method="POST" action="{{ route('buyars.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus />
                            </div>
                            <div class="form-group row">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="email " name="email" required />
                            </div>
                            <div class="form-group row">
                                <label>Address</label>
                                <input class="form-control" type="text" placeholder="address" name="address" required />
                            </div>
                            {{-- <div class="form-group row">
                                <label>Code</label>
                                <input class="form-control" type="text" placeholder="monile_number" name="monile_number" required />
                            </div> --}}
                            <div class="form-group row">
                                <label>Code</label>
                                <input class="form-control" type="text" placeholder="code" name="code" required />
                            </div>

                            <button class="btn btn-success" type="submit">Add</button>
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