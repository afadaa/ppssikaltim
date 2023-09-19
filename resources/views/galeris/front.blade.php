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
                    <span class="wow fadeInDown" data-wow-delay=".2s">Galeri</span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item mb-30">
                        <div class="service-icon mb-25">
                            <div class="blog-img">
                                <a href="#"><img src="{{ $item->thumbnail }}" alt=""></a>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4>{{ $item->tittle }}</h4>
                        </div>
                        <div class="service-overlay img-bg"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection