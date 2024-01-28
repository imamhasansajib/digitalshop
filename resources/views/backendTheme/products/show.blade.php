<x-backendTheme.layouts.master>

    @section('title')
    <title>Product Details</title>
    @endsection
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong><center>Product Description</center></strong></h1>

        <div class="card-header">
            <a class="btn btn-info mb-2" href="{{ route('products.index') }}">Product List</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td class="fw-bold">Title</td>
                        <td>{{ $product->title }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Price</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Description</td>
                        <td>{{ $product->description }}</td>
                    </tr>
                    @if($product->image)
                    <tr>
                        <td class="fw-bold">Image</td>
                        <td><img src="/storage/{{ $product->image }}"></td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>

</x-backendTheme.layouts.master>
