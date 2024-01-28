<x-backendTheme.layouts.master>

    @section('title')
    <title>Add Slider</title>
    @endsection
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Add New Slider</strong></h1>

        <div class="card-header">
            <a class="btn btn-info mb-2" href="{{ route('sliders.index') }}">Slider List</a>
        </div>

        <div class="card-body">
            <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="inputSliderTitle" class="col-sm-3 col-form-label">Slider Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="slider_title" value="" id="inputSliderTitle"
                            placeholder="Enter slider title">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputShortTitle" class="col-sm-3 col-form-label">Short Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="short_title" value="" id="inputShortTitle"
                            placeholder="Enter short title">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputSliderImage" class="col-sm-3 col-form-label">Slider Image</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" name="slider_image" value="" id="inputSliderImage">
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>

</x-backendTheme.layouts.master>
