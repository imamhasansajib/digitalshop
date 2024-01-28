@php
$sliders = App\Models\Slider::orderBy('slider_title', 'ASC')->limit(10)->get();
@endphp

<div class="wrap-main-slide">
    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">

        @foreach($sliders->take(3) as $slider)
        <div class="item-slide">
            <img src="/storage/{{ $slider->slider_image }}" class="img-slide">
            <div class="slide-info @if($slider->slider_title == 'slide-1') slide-1 @elseif($slider->slider_title == 'slide-2') slide-2 @else slide-3 @endif">
                <h2 class="f-title"><b>{{ $slider->short_title }}</b></h2>
                @if($slider->slider_title == 'slide-1')
                    <span class="subtitle"><b>{{ $slider->slider_title }}</b></span>
                    <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                    <a href="#" class="btn-link">Shop Now</a>
                @elseif($slider->slider_title == 'slide-2')
                <span class="f-subtitle"><b>{{ $slider->slider_title }}</b></span>
                    <p class="discount-code">Use Code: #FA6868</p>
					<h4 class="s-title">Get Free</h4>
					<p class="s-subtitle">TRansparent Straps</p>
                @else
                    <span class="f-subtitle"><b>{{ $slider->slider_title }}</b></span>
					<p class="sale-info">Stating at: <b class="price">$225.00</b></p>
					<a href="#" class="btn-link">Shop Now</a>
                @endif

            </div>
        </div>
        @endforeach

    </div>
</div>
