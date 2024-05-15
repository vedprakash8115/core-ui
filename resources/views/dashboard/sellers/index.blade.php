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
                            <a href="{{ route('sellers.create') }}" class="btn btn-primary m-2">Add category</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th>shop_name</th>
                                    <th>address</th>
                                    <th>contact_person</th>
                                    <th>contact_number</th>
                                    <th>shop_code</th>
                                    <th>send</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sellers as $seller)
                              
                                <tr>
                                    <td><strong>{{ $seller->shop_name }}</strong></td>
                                    <td><strong>{{ $seller->address }}</strong></td>
                                    <td><strong>{{ $seller->contact_person }}</strong></td>
                                    <td><strong>{{ $seller->contact_number }}</strong></td>
                                    <td><strong>{{ $seller->shop_code }}</strong></td>
                                    <td>
                                        <a href="{{ route('prepareSend', ['id' => $seller->id] ) }}" class="btn btn-warning">Send</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/sellers/' . $seller->id) }}" class="btn btn-primary">View</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/sellers/' . $seller->id . '/edit') }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('sellers.destroy', $seller->id ) }}" method="POST">
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