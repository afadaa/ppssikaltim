<div class="shape shape-7">
    <img src="/assets/img/shapes/shape-6.svg" alt="">
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="section-title text-center mb-55">
                <span class="wow fadeInDown" data-wow-delay=".2s">Blog Post</span>
                <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">Latest News</h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    dinonumy <br class="d-none d-lg-block"> eirmod tempor invidunt ut labore et dolore magn.</p>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($berita as $item)
        <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".4s">
                <div class="blog-img">
                    <a href="#"><img src="{{ $item->thumbnail }}" alt=""></a>
                </div>
                <div class="blog-content">
                    <h4><a href="#">{{ $item->tittle }}</a></h4>
                    <p>{!! Str::limit($item->desc, 100, '...') !!}</p>
                    <a class="read-more" href="/berita/{{$item->slug}}">Lihat Selengkapnya <i class="lni lni-arrow-right"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
