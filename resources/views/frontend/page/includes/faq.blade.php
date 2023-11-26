{{--<section class="faq-two">--}}
{{--    <div class="faq-two__shape-1 float-bob-y">--}}
{{--        <img src="{{ asset('assets/frontend/images/shapes/faq-two-shape-1.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="faq-two__shape-2 img-bounce">--}}
{{--        <img src="{{ asset('assets/frontend/images/shapes/faq-two-shape-2.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="faq-two__inner">--}}
{{--            <h3 class="section__title-two">{{ $element->first()->title ?? '' }}</h3>--}}
{{--            <div class="accrodion-grp" data-grp-name="faq-two-accrodion">--}}
{{--                @foreach($element as $index=>$row)--}}
{{--                    <div class="accrodion  {{$loop->first ? 'active':''}}">--}}
{{--                        <div class="accrodion-title">--}}
{{--                            <h4> {{ $row->list_title ?? '' }}</h4>--}}
{{--                        </div>--}}
{{--                        @if($row->list_description)--}}
{{--                            <div class="accrodion-content">--}}
{{--                                <div class="inner">--}}
{{--                                    <p> {{ $row->list_description ?? '' }}</p>--}}
{{--                                </div><!-- /.inner -->--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="faq-area" style="    padding: 60px 0 96px;">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <div class="col-lg-12">
                <div class="faq-content">
                    <div class="section-title mb-30 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Our FAQ's</span>
                        <h2 class="title tg-element-title">{{ $element->first()->title ?? '' }}</h2>
                    </div>
                    <div class="accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            @foreach($element as $index=>$row)
                                <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="{{ $row->list_description ? 'accordion-button':'accordion-button-2' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{$loop->first ? 'true':'false'}}" aria-controls="collapse{{ $index }}">
                                        {{ $row->list_title ?? '' }}
                                    </button>
                                </h2>
                                @if($row->list_description)
                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse {{$loop->first ? 'show':''}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{{ $row->list_description ?? '' }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
