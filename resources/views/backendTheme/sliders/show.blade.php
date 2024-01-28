<x-backendTheme.layouts.master>

    @section('title')
    <title>Slider Details</title>
    @endsection
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong><center>Slider Details</center></strong></h1>

        <div class="card-header">
            <a class="btn btn-info mb-2" href="{{ route('sliders.index') }}">Slider List</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td class="fw-bold">Slider Title</td>
                        <td>{{ $slider->slider_title }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Short Title</td>
                        <td>{{ $slider->short_title }}</td>
                    </tr>
                    @if($slider->slider_image)
                    <tr>
                        <td class="fw-bold">Image</td>
                        <td><img src="/storage/{{ $slider->slider_image }}" height="300" width="600"></td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>

</x-backendTheme.layouts.master>
