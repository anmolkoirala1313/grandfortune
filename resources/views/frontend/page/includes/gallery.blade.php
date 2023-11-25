<section class="project-area-two project-bg-two" data-background="{{ asset('assets/frontend/img/bg/project_bg02.jpg') }}" style="    padding: 90px 100px;">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title section-title-three text-center mb-20 tg-heading-subheading animation-style1">
                    <span class="sub-title tg-element-title">{{ $element->list_number_2 ?? '' }}</span>
                    <h2 class="title tg-element-title">{{ $element->list_number_1 ?? '' }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($element->pageSectionGalleries as $index=>$gallery)
                <div class="col-lg-4 col-md-6 col-sm-10 mt-3">
                    <div class="project-thumb-two">
                        <div class="magnific-img">
                            <a class="image-popup-vertical-fit"
                               href="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" title="">
                                <img src="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}"
                                     class="{{ @$page_detail->slug=='legal-document' || @$page_detail->slug=='legal-documents' || @$page_detail->slug=='sample-documents' || @$page_detail->slug=='sample-document' ? '':'image-dimension' }}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{--<section class="portfolio-one">--}}
{{--    <div class="portfolio-one__shape-1 float-bob-x">--}}
{{--        <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/portfolio-one-shape-1.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="portfolio-one__shape-2 rotate-me">--}}
{{--        <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/portfolio-one-shape-2.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="section-title text-center">--}}
{{--            <div class="section-title__tagline-box">--}}
{{--                <p class="section-title__tagline">{{ $element->list_number_2 ?? '' }}</p>--}}
{{--            </div>--}}
{{--            <h2 class="section-title__title">{{ $element->list_number_1 ?? '' }}</h2>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            @foreach($element->pageSectionGalleries as $index=>$gallery)--}}

{{--            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay="{{$index+1}}00ms">--}}
{{--                <div class="portfolio-one__single">--}}
{{--                    <div class="portfolio-one__img-box">--}}
{{--                        <div class="portfolio-one__img">--}}
{{--                            <img class="{{ @$page_detail->slug=='legal-document' || @$page_detail->slug=='legal-documents' || @$page_detail->slug=='sample-documents' || @$page_detail->slug=='sample-document' ? '':'image-dimension' }}" src="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-one__arrow">--}}
{{--                            <a href="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" class="img-popup"><span--}}
{{--                                    class="icon-top-right-1"></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}

