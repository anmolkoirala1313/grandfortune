@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'breadcrumb_bg.jpg'])

    <section class="team-area-four pt-40 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-50 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Expert People</span>
                        <h2 class="title tg-element-title">Dedicated Team Members</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @if(count($data['rows']))
                    @foreach($data['rows'] as $team)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                            <div class="team-item-four">
                                <div class="team-thumb-four">
                                    <img class="lazy" data-src="{{ asset(imagePath($team->image)) }}" alt="">
                                    @if(@$team->fb_link || @$team->twitter_link || @$team->instagram_link || @$team->linkedin_link)
                                        <div class="team-social-three">
                                            <div class="social-toggle-icon">
                                                <i class="fas fa-share-alt"></i>
                                            </div>
                                            <ul class="list-wrap">
                                                @if($team->fb_link)
                                                    <li> <a href="{{ $team->fb_link  ?? "#" }}"><span class="fab fa-facebook"></span></a></li>
                                                @endif
                                                @if($team->instagram_link)
                                                     <li><a href="{{ $team->instagram_link  ?? "#" }}"><span class="fab fa-instagram"></span></a></li>
                                                @endif
                                                @if($team->twitter_link)
                                                   <li> <a href="{{ $team->twitter_link  ?? "#" }}"><span class="fab fa-twitter"></span></a></li>
                                                @endif
                                                @if($team->linkedin_link)
                                                        <li><a href="{{ $team->linkedin_link  ?? "#" }}"><span class="fab fa-linkedin"></span></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="team-content-four">
                                    <h2 class="title"><a>{{$team->title ?? ''}}</a></h2>
                                    <span>{{$team->designation ?? ''}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="pagination-wrap mt-30">
                    <nav aria-label="Page navigation example">
                        {{ $data['rows']->links('vendor.pagination.default') }}
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
