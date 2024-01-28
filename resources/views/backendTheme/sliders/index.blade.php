<x-backendTheme.layouts.master>

    @section('title')
    <title>Sliders</title>
    @endsection
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Slider List</strong></h1>

        <div class="container-fluid p-0">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('sliders.create') }}" class="btn btn-info">Add New Slider</a>
                        </div>
                        <div class="card-body">

                            @if(count($sliders) > 0)
                            <table class="table table-striped">
                                <thead>
                                    <th>SL</th>
                                    <th>Slider Title</th>
                                    <th>Short Title</th>
                                    <th>Slider Image</th>
                                    <th width="300" class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    @php $l=0 @endphp
                                    @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{ ++$l }}</td>
                                        <td>{{ $slider->slider_title }}</td>
                                        <td>{{ $slider->short_title }}</td>
                                        <td><img src="/storage/{{ $slider->slider_image }}" height="40px" width="70px"></td>
                                        <td class="text-center">
                                            <a class="btn btn-info btn-sm"
                                                href="{{ route('sliders.show', ['slider'=> $slider->id]) }}">Show</a>
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('sliders.edit', ['slider'=> $slider->id]) }}">Edit</a>

                                            <form style="display:inline"
                                                action="{{ route('sliders.destroy', ['slider' => $slider->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete <?= $slider->title ?>?')"
                                                    style="font-size: 11px">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <h3><center>No sliders available at the moment!</center>
                            </h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-backendTheme.layouts.master>
