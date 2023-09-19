@extends('master')
@section('judul', 'RSUD Beriman Balikpapan')

@section('blog')
<div class="shape shape-3">
    <img src="/assets/img/shapes/shape-3.svg" alt="">
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="section-title text-center mb-55">
                <span class="wow fadeInDown" data-wow-delay=".2s">About</span>
                <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">Tentang Hisfarsi PD KALTIM</h2>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($data as $item)
            <div class="col-lg-4 col-md-6">
                <div class="service-item mb-30">
                    <div class="service-icon mb-25">
                        <svg xmlns="http://www.w3.org/2000/svg" width="46.239" height="51.043" viewBox="0 0 46.239 51.043">
                            <g id="we-do-4" transform="translate(-1273.5 -1752.346)">
                                <g id="Icon_feather-home" data-name="Icon feather-home" transform="translate(1275 1753.846)">
                                    <path id="Path_108" data-name="Path 108"
                                        d="M4.5,19.815,26.119,3,47.739,19.815V46.239a4.8,4.8,0,0,1-4.8,4.8H9.3a4.8,4.8,0,0,1-4.8-4.8Z"
                                        transform="translate(-4.5 -3)" fill="none" stroke="#00adb5" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="3" />
                                </g>
                                <path id="Union_1" data-name="Union 1" d="M7.658,6.87h0v0h0v0Z"
                                    transform="translate(1288.853 1775.014)" fill="none" stroke="#00adb5" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" />
                            </g>
                        </svg>
                    </div>
                    <div class="service-content">
                        <h4>{{ $item->tittle }}</h4>
                        <a href="/about/{{$item->slug}}" class="read-more">Lihat Selengkapnya<i class="lni lni-arrow-right"></i></a>
                    </div>
                    <div class="service-overlay img-bg"></div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection