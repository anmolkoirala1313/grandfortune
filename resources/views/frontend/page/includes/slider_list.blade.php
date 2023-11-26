{{--<section class="news-one" style="background-color: #F5F7F8;">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title text-center">--}}
{{--            <div class="section-title__tagline-box">--}}
{{--                <p class="section-title__tagline">{{ $element->first()->subtitle ?? '' }}</p>--}}
{{--            </div>--}}
{{--            <h2 class="section-title__title">{{ $element->first()->title ?? '' }}</h2>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            @if( $data['slider_list_type'] == 'normal')--}}
{{--                  @include($base_route.'includes.slider_list_detail')--}}
{{--            @else--}}
{{--                <div class="news-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{--}}
{{--                    "items": 3,--}}
{{--                    "margin": 30,--}}
{{--                    "smartSpeed": 600,--}}
{{--                    "loop":true,--}}
{{--                    "autoplay": 6000,--}}
{{--                    "nav":false,--}}
{{--                    "dots":true,--}}
{{--                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],--}}
{{--                    "responsive":{--}}
{{--                        "0":{--}}
{{--                            "items":1--}}
{{--                        },--}}
{{--                        "768":{--}}
{{--                            "items":2--}}
{{--                        },--}}
{{--                        "992":{--}}
{{--                            "items": 3--}}
{{--                        }--}}
{{--                    }--}}
{{--                }'>--}}
{{--                    @include($base_route.'includes.slider_list_detail')--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<section class="services-area-five inner-services-bg" data-background="{{ asset('assets/frontend/img/bg/inner_services_bg.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title section-title-three text-center mb-20 tg-heading-subheading animation-style1">
                    <span class="sub-title tg-element-title">{{ $element->first()->subtitle ?? '' }}</span>
                    <h2 class="title tg-element-title">{{ $element->first()->title ?? '' }}</h2>
                </div>
            </div>
        </div>
            @if( $data['slider_list_type'] == 'normal')
                <div class="row justify-content-center">
                    @include($base_route.'includes.slider_list_detail')
                </div>
            @else
            <div class="row services-active">
                @include($base_route.'includes.slider_list_detail')
            </div>
         @endif

        </div>
    </div>
</section>
