<x-backendTheme.layouts.master>

    @section('title')
    <title>Edit Slider</title>
    @endsection
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Edit Slider</strong></h1>

        <div class="card-header">
            <a class="btn btn-info mb-2" href="{{ route('sliders.index') }}">Slider List</a>
        </div>

        <div class="card-body">
            <form action="{{ route('sliders.update', ['slider'=>$slider->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="inputSliderTitle" class="col-sm-3 col-form-label">Slider Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="slider_title" value="{{ old('slider_title', $slider->slider_title) }}"
                            id="inputSliderTitle">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputShortTitle" class="col-sm-3 col-form-label">Short Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="short_title"
                            value="{{ old('short_title', $slider->short_title) }}" id="inputShortTitle">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputSliderImage" class="col-sm-3 col-form-label">Slider Image</label>
                    <div class="col-sm-8">
                        @if($slider->slider_image)
                        <img src="/storage/{{ $slider->slider_image }}">
                        @endif
                        <input type="file" class="form-control mt-2" name="slider_image"
                            value="{{ old('slider_image', $slider->slider_image) }}" id="inputSliderImage">
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>

</x-backendTheme.layouts.master>
