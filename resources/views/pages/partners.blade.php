<div class="shape shape-1">
    <img src="/assets/img/shapes/shape-1.svg" alt="">
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="section-title text-center mb-55">
                <span class="wow fadeInDown" data-wow-delay=".2s">Partner Kami</span>
                <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">HISFARSI PD KALTIM</h2>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($partner as $item)
        <div class="col-lg-3">
            <div class="we-do-item mb-30">
                <div class="we-do-icon mb-25">
                    <img src="/{{ $item->thumbnail }}" alt="">
                </div>
                <h5>{{ $item->tittle }}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
