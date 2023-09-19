@extends('master')
@section('judul', 'RSUD Beriman Balikpapan')

@section('blog')
@foreach ($data as $item)
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <nav>
      <div class="container">
          <ol>
              <li><a href="/">Home</a></li>
              <li>About</li>
              <li>{{$item->tittle}}</li>

          </ol>
      </div>
  </nav>
</div><!-- End Breadcrumbs -->
@endforeach
<!-- ========================= blog-section start ========================= -->
<section id="blog" class="blog-section pt-10">
    <div class="container">
        <div class="row">
          @foreach ($data as $item)
            <div class="col-xs-12 col-md-6 col-lg-12">
                <div class="about-item">
                  <div class="about-text">
                    <h1>{{$item->tittle}}</h1>
                    <div class="mb-3">
                      <span class="post-author">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>  {{ Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y')}} |
                        <i class="fa fa-user" aria-hidden="true"></i> Administrator
                      </span>
                    </div>
                        <p>{!! $item->desc !!}</p>                        
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg mt-3 mb-3">
                <a href="/" class="btn btn-back "><i class="fa fa-chevron-left" aria-hidden="true"></i>  Kembali</a>
            </div>
        </div>
    </div>
</section>
<!-- ========================= blog-section end ========================= -->
@endsection

