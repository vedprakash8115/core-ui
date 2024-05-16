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
                            <a href="{{ route('buyars.create') }}" class="btn btn-primary m-2">Add buyar</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Code</th>
                                    <th class="text-center">Action</th>
                                    <th>Delete</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($buyars as $buyar)
                              
                                <tr>
                                    <td><strong>{{ $buyar->name }}</strong></td>
                                    <td><strong>{{ $buyar->email }}</strong></td>
                                    <td><strong>{{ $buyar->address }}</strong></td>
                                    <td><strong>{{ $buyar->code }}</strong></td>
                                    <td class="text-center">
                                        <a href="{{ route('prepareSend', ['id' => $buyar->id] ) }}" class="btn btn-warning">Send</a>
                                        <a href="{{ url('/buyars/' . $buyar->id) }}" class="btn btn-primary">View</a>
                                         <a href="{{ url('/buyars/' . $buyar->id . '/edit') }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    
                                    <td>
                                        <form action="{{ route('buyars.destroy', $buyar->id ) }}" method="POST">
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