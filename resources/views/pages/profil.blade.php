
<div class="shape shape-2">
    <img src="/assets/img/shapes/shape-2.svg" alt="">
</div>
@foreach ($profil as $item)
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-11 mx-auto">
                <div class="about-content text-center mb-55">
                    <div class="section-title mb-30">
                        <span class="wow fadeInDown" data-wow-delay=".2s">Selamat Datang</span>
                        <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">{{ $item->tittle }}</h2>
                    </div>
                    <p class="mb-35 wow fadeInUp" data-wow-delay=".6s">
                        {!! $item->desc !!}    
                    </p>
                    <a href="#about" class="btn theme-btn wow fadeInUp" data-wow-delay=".8s">Lihat Event</a>
                </div>
            </div>
        </div>
    </div>
@endforeach