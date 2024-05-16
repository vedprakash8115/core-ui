@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>Ecategorys Templates
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <a href="{{ route('services.create') }}" class="btn btn-primary m-2">Add Saller</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>category</th>
                                    <th>Price</th>
                                    
                                    <th>send</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                              
                                <tr>
                                    <td><strong>{{ $service->name }}</strong></td>
                                    <td><strong>{{ $service->code }}</strong></td>
                                    <td><strong>{{ $service->category_id }}</strong></td>
                                    <td><strong>{{ $service->price }}</strong></td>
                                    
                                    <td>
                                        <a href="{{ route('prepareSend', ['id' => $service->id] ) }}" class="btn btn-warning">Send</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/services/' . $service->id) }}" class="btn btn-primary">View</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/services/' . $service->id . '/edit') }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('services.destroy', $service->id ) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $ecategoryTemplates->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection