<x-backendTheme.layouts.master>

    @section('title')
    <title>Edit Product</title>
    @endsection
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Edit Product</strong></h1>

        <div class="card-header">
            <a class="btn btn-info mb-2" href="{{ route('products.index') }}">Product List</a>
        </div>

        <div class="card-body">
            <form action="{{ route('products.update', ['product'=>$product->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="inputTitle" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="title" value="{{ old('title', $product->title) }}"
                            id="inputTitle">
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="price"
                            value="{{ old('price', $product->price) }}" id="inputPrice">
                        @error('price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="description"
                            value="{{ old('description', $product->description) }}" id="inputDescription">
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputStatus" class="col-sm-1 form-check-label">Status</label>
                    <div class="col-sm-9">
                        <input type="checkbox" class="form-check-input" id="inputStatus" name="status" value="1" <?php if($product['status']): ?> checked <?php endif; ?>>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputImage" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-8">
                        @if($product->image)
                        <img src="/storage/{{ $product->image }}">
                        @endif
                        <input type="file" class="form-control mt-2" name="image"
                            value="{{ old('image', $product->image) }}" id="inputImage">
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>

</x-backendTheme.layouts.master>
