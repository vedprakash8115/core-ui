@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>Emails Templates</div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                </div>
                            </div>
                         @endif
                        <div class="row"> 
                          <a href="{{ route('products.create') }}" class="btn btn-primary m-2">Add Template</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>name</th>
                            <th>cost</th>
                            <th>category_id</th>
                            <th>product_code</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($products as $product)
                            <tr>
                              <td><strong>{{ $product->name }}</strong></td>
                              <td><strong>{{ $product->cost }}</strong></td>
                              <td>
                                <a href="{{ route('prepareSend', ['id' => $product->id] ) }}" class="btn btn-warning">Send</a>
                              </td>
                              <td>
                                <a href="{{ url('/products/' . $product->id) }}" class="btn btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('products.destroy', $product->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{-- {{ $eproductTemplates->links() }} --}}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection
