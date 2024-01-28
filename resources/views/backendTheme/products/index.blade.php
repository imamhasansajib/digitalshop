<x-backendTheme.layouts.master>

    @section('title')
    <title>Products</title>
    @endsection
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Product List</strong></h1>

        <div class="container-fluid p-0">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('products.create') }}" class="btn btn-info">Add New Product</a>
                        </div>
                        <div class="card-body">

                            @if(session('message'))
                                <div class="alert alert-success" style="padding: 15px;
                                    margin-bottom: 20px;
                                    border: 1px solid transparent;
                                    border-radius: 4px;  background-color: #dff0d8;
                                    border-color: #d6e9c6;
                                    color: #3c763d;">
                                    <strong>{{ session('message') }}&nbsp;&nbsp;</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            @if(count($products) > 0)
                            <table class="table table-striped">
                                <thead>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th width="300" class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    @php $l=0 @endphp
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{ ++$l }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>
                                            @if($product->status == 1)
                                            <span class="badge rounded-pill bg-success">Active</span>
                                            @else
                                            <span class="badge rounded-pill bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-info btn-sm"
                                                href="{{ route('products.show', ['product'=> $product->id]) }}">Show</a>
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('products.edit', ['product'=> $product->id]) }}">Edit</a>

                                            <form style="display:inline"
                                                action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete <?= $product->title ?>?')"
                                                    style="font-size: 11px">Delete</button>
                                            </form>

                                            @if($product->status == 1)
                                            <a href="{{ route('product.inactive', $product->id) }}" class="btn btn-primary btn-sm"
                                                title="Active"><i class="align-middle" data-feather="thumbs-up"></i></a>
                                            @else
                                            <a href="{{ route('product.active', $product->id) }}" class="btn btn-primary btn-sm"
                                                title="Inactive"><i class="align-middle" data-feather="thumbs-down"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <h3><center>No products available at the moment!</center>
                            </h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-backendTheme.layouts.master>
