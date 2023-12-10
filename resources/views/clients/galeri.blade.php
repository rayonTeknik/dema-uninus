@section('title'){{ 'Home' }}@endsection
@section('favicon'){{ asset('img/dema.png') }}@endsection
@extends('masterClient')
@section('content')

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio mt-4">

          <div class="container" data-aos="fade-up">

              <header class="section-header m-4 pt -4">
                  {{-- <h2>Galeri Kegiatan</h2> --}}
                  <p class="mt-4">Dokumentasi Kegiatan Dema</p>
              </header>

              <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-lg-12 d-flex justify-content-center">
                      {{-- <ul id="portfolio-flters">
                          <li data-filter="*" class="filter-active">All</li>
                          <li data-filter=".filter-app">App</li>
                          <li data-filter=".filter-card">Card</li>
                          <li data-filter=".filter-web">Web</li>
                      </ul> --}}
                  </div>
              </div>

              <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($galery as $item)
                    
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('img/'. $item->img) }}" class="img-fluid " style="width: 370px; height:250px; object-fit:cover" alt="">
                          <div class="portfolio-info">
                              <h4>{{ $item->title }}</h4>
                              {{-- <p>App</p> --}}
                              <div class="portfolio-links">
                                  <a href="{{ asset('img/'. $item->img) }}" data-gallery="portfolioGallery"
                                      class="portfokio-lightbox" title="{{ $item->title }}"><i class="bi bi-plus"></i></a>
                                  <a href="{{ asset('img/'. $item->img) }}" title="More Details"><i class="bi bi-link"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                @endforeach

              </div>

          </div>

      </section><!-- End Portfolio Section -->
@endsection