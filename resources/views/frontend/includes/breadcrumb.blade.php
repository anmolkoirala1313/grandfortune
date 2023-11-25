{{--<section class="page-header">--}}
{{--    <div class="page-header__bg" style="background-image:url({{ isset($page_image) && $page_image  ? asset(imagePath($page_image)) :--}}
{{-- asset('assets/frontend/images/backgrounds/'.$breadcrumb_image) }});">--}}
{{--    </div>--}}
{{--    <div class="page-header__shape-1 float-bob-y">--}}
{{--        <img src="{{ asset('assets/frontend/images/shapes/page-header-shape-1.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="page-header__shape-2 float-bob-x">--}}
{{--        <img src="{{ asset('assets/frontend/images/shapes/page-header-shape-2.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="page-header__shape-3 float-bob-y">--}}
{{--        <img src="{{ asset('assets/frontend/images/shapes/page-header-shape-3.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="page-header__shape-4 float-bob-x">--}}
{{--        <img src="{{ asset('assets/frontend/images/shapes/page-header-shape-4.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="page-header__inner">--}}
{{--            <h2>  {{ $page_title }}</h2>--}}
{{--            <ul class="thm-breadcrumb list-unstyled">--}}
{{--                <li>--}}
{{--                    <a href="/">Home</a>--}}
{{--                </li>--}}
{{--                <li><span class="icon-down-arrow"></span></li>--}}

{{--            @if($page_method !=='index')--}}
{{--                    <li>--}}
{{--                        <a href="{{route($base_route.'index')}}">{{ $page }}</a>--}}
{{--                    </li>--}}
{{--                    <li><span class="icon-down-arrow"></span></li>--}}
{{--                    <li>--}}
{{--                        {{ $page_title }}--}}
{{--                    </li>--}}
{{--                @else--}}
{{--                    <li>--}}
{{--                        {{ $page }}--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="breadcrumb-area breadcrumb-bg" data-background="{{ isset($page_image) && $page_image  ? asset(imagePath($page_image)) :
 asset('assets/frontend/img/bg/'.$breadcrumb_image) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">{{ $page_title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            @if($page_method !=='index')
                                <a class="breadcrumb-item">
                                    <a href="{{route($base_route.'index')}}"></a>{{ $page }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"> {{ $page_title }}</li>

                            @else
                                <li class="breadcrumb-item active" aria-current="page"> {{ $page_title }}</li>
                            @endif
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="{{ asset('assets/frontend/img/images/breadcrumb_shape01.png') }}" alt="">
        <img src="{{ asset('assets/frontend/img/images/breadcrumb_shape02.png') }}" alt="">
    </div>
</section>
