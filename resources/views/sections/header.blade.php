<div class="header-wrapper">
    <div class="header-top theme-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="header-top-left text-center text-md-left">
              <ul>
                <li><a href="mailto:ppssikaltim@gmail.com"><i class="lni lni-envelope"></i> ppssikaltim@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="header-top-right d-none d-md-block">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/ppssikaltim/"><i class="lni lni-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="/">
                <img src="/assets/img/PPSSIKaltim.png" alt="Logo" style="width: 100px">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="active" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="" href="/event">Event</a>
                  </li>
                  <li class="nav-item">
                    <a class="" href="/about">Tentang</a>
                  </li>
                  <li class="nav-item">
                    <a class="" href="/galeri">Galeri</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#contact">Kontak</a>
                  </li>
                </ul>
              </div> <!-- navbar collapse -->
            </nav> <!-- navbar -->
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- navbar area -->
</div>

<div class="slider-wrapper">
  <!-- ========================= slider-section start ========================= -->
  <section class="slider-section">
    <div class="slider-active slick-style">
      @foreach ($agenda as $item)
      <?php
        $image_path = "$item->thumbnail";
        $image_path = str_replace('\\', '/', $image_path);
      ?>
      <div class="single-slider img-bg" style="background-image:url('/{{ $image_path }}');">
          <div class="container">
              <div class="row">
                  <div class="col-xl-7 col-lg-8 col-md-10 pt-5">
                      <div class="slider-content">
                        <h1 data-animation="fadeInDown" data-duration="1.5s" data-delay=".5s">{{ Str::limit($item->tittle, 60)  }}</h1>
                        <a href="/event/{{$item->slug}}" class="btn theme-btn">Lihat Selengkapnya</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
    </div>
  </section>
  <!-- ========================= slider-section end ========================= -->
</div>
