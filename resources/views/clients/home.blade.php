@section('title')
    {{ 'Home' }}
@endsection
@extends('masterClient')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">

                  {{-- @dd($dataHome) --}}
                    <h1 data-aos="fade-up">{{ $dataHome[0]->title }}</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">{{ $dataHome[0]->description }}</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/'. $dataHome[0]->img) }}" class="img-fluid" alt="home-img"
                    style="border-radius: 70% 30% 74% 26% / 16% 71% 29% 84% " >
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


      
                <!-- Feature Tabs -->
                <div class="row feture-tabs m-4 pt-4" data-aos="fade-up">
                  <div class="col-lg-12">
                    <header class="section-header">
                      <h2>Visi dan Misi</h2>
                      <p>Kabinet Merdeka</p>
                  </header>

                      <!-- Tabs -->
                      <ul class="nav nav-pills mb-3 text-center justify-content-center align-center">
                          <li>
                              <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Visi</a>
                          </li>
                          <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#tab2">Misi</a>
                          </li>
                      </ul><!-- End Tabs -->

                      <!-- Tab Content -->
                      <div class="tab-content">

                          <div class="tab-pane fade show active container" id="tab1">
                              <p>
                                Menjadikan Dema Uninus sebagai wahana intelektual mahasiswa yang berlandaskan asas kesatuan tujuan, penyerap aspirasi mahasiswa uninus dan sekaligus inisiator penggerak pelaksana aspirasi, guna mewujudkan Dema Uninus yang kompetible, harmonis dan berjiwa sosialis.
                              </p>
                          </div><!-- End Tab 1 Content -->

                          <div class="tab-pane fade show container" id="tab2">

                              <div class="d-flex align-items-center mb-2">
                                  <i class="bi bi-check2"></i>
                                  <p>Membangun Internal Dema berlandaskan kekeluargaan yang bernafaskan profesionalisme.</p>
                              </div>
                              <div class="d-flex align-items-center mb-2">
                                  <i class="bi bi-check2"></i>
                                  <p>Mewujudkan mahasiswa UNINUS yang kompeten dan selaras dengan tujuan bersama.</p>
                              </div>
                              <div class="d-flex align-items-center mb-2">
                                  <i class="bi bi-check2"></i>
                                  <p>Menguatkan penyerapan aspirasi untuk melayani mahasiswa secara solutif. 
                                  </p>
                              </div>
                              <div class="d-flex align-items-center mb-2">
                                  <i class="bi bi-check2"></i>
                                  <p>Memfasilitasi pengembangan minat bakat, keilmuan, dan karakter mahasiswa UNINUS.
                                  </p>
                              </div>
                              <div class="d-flex align-items-center mb-2">
                                  <i class="bi bi-check2"></i>
                                  <p>Melakukan kajian terkait isu strategis dalam pemecahan masalah di lingkungan fakultas, universitas, daerah maupun tingkat nasional.
                                  </p>
                              </div>
                              
                          </div><!-- End Tab 2 Content -->

                      </div>

                  </div>

                  {{-- <div class="col-lg-6">
                      <img src="{{ asset('template/assets/img/features-2.png') }}" class="img-fluid" alt="">
                  </div> --}}

              </div><!-- End Feature Tabs -->

                      <!-- ======= Features Section ======= -->
        <section id="features" class="features">

          <div class="container" data-aos="fade-up">

              <header class="section-header">
                  <h2>Features</h2>
                  <p>Dema Uninus Sebagai</p>
              </header>

              <div class="row">

                  <div class="col-lg-6">
                      <img src="{{ asset('template/assets/img/features.png') }}" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                      <div class="row align-self-center gy-4">

                          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                              <div class="feature-box d-flex align-items-center">
                                  <i class="bi bi-check"></i>
                                  <h3>Perwakilan Suara Mahasiswa</h3>
                              </div>
                          </div>

                          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                              <div class="feature-box d-flex align-items-center">
                                  <i class="bi bi-check"></i>
                                  <h3>Penyelenggaraan Program</h3>
                              </div>
                          </div>

                          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                              <div class="feature-box d-flex align-items-center">
                                  <i class="bi bi-check"></i>
                                  <h3>Advokasi Hak Mahasiswa</h3>
                              </div>
                          </div>

                          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                              <div class="feature-box d-flex align-items-center">
                                  <i class="bi bi-check"></i>
                                  <h3>Manajemen Dana</h3>
                              </div>
                          </div>

                          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                              <div class="feature-box d-flex align-items-center">
                                  <i class="bi bi-check"></i>
                                  <h3>Pendampingan Mahasiswa</h3>
                              </div>
                          </div>

                          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                              <div class="feature-box d-flex align-items-center">
                                  <i class="bi bi-check"></i>
                                  <h3>Kolaborasi Eksternal</h3>
                              </div>
                          </div>

                      </div>
                  </div>

              </div> <!-- / row -->

              <!-- Feature Icons -->
              <div class="row feature-icons" data-aos="fade-up">
                  <h3>Sambutan Presiden Mahasiswa</h3>

                  <div class="row">

                      <div class="col-xl-6 text-center" data-aos="fade-right" data-aos-delay="100">
                          <img src="{{ asset('img/mcah.png') }}" class="img-fluid p-4"
                              alt="">
                      </div>

                      <div class="col-xl-6 d-flex content">
                          <div class="row align-self-center gy-4">

                              <div class="col-md-12 icon-box" data-aos="fade-up">
                                <i class="fa-sharp fa-solid fa-quote-left"></i>
                                  <div>
                                      {{-- <h4>Abu Naum</h4> --}}
                                      <p>Tidur dimanapun dan kapanpun adalah jalan ninjaku!!!!</p>
                                  </div>
                                  <i class="fa-solid fa-quote-right"></i>
                              </div>

                          </div>
                      </div>

                  </div>

              </div><!-- End Feature Icons -->

          </div>

      </section><!-- End Features Section -->


        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Values</h2>
                    <p>Datang dan Meriahkan</p>
                </header>

                <div class="row">

                  @foreach ($dataKegiatan as $item)

                  <div class="container mt-5">
                    <table class="table bordered-table table-kegiatan d-flex align-items-center justify-content-center">
                        <thead>
                            <tr>
                              <th scope="col" class="date-header d-flex align-items-center justify-content-center"><time datetime="{{ $item->created_at->format('Y-m-d') }}">{{ $item->created_at->format('d M, Y') }}</time></th>
                                <th scope="col" class="info-column">
                                  <h4>{{ $item['name'] }}</h4>
                                    <i class="bi bi-clock"></i>  <time datetime="{{ $item->created_at->format('Y-m-d') }}">{{ $item->created_at->format('d M, Y') }}</time> <br>
                                    <i class="bi bi-geo-alt"></i> {{ $item['location'] }} 
                                </th>
                                <th>
                                  <div> 
                                    <img src="{{ asset('img/'. $item->img) }}" style="width:100px; height:70px; object-fit:cover" alt="">
                                  </div>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
              @endforeach
              

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Counts Section ======= -->
        {{-- <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section --> --}}


{{-- 
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Services</h2>
                    <p>Veritatis et dolores facere numquam et praesentium</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Nesciunt Mete</h3>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                                perferendis tempore et consequatur.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Eosle Commodi</h3>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic
                                non ut nesciunt dolorem.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Ledo Markt</h3>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas
                                adipisci eos earum corrupti.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Asperiores Commodi</h3>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit
                                provident adipisci neque.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Velit Doloremque.</h3>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi
                                at autem alias eius labore.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Dolori Architecto</h3>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                Corrupti recusandae ducimus enim.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Pricing</h2>
                    <p>Check our Pricing</p>
                </header>

                <div class="row gy-4" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <h3 style="color: #07d5c0;">Free Plan</h3>
                            <div class="price"><sup>$</sup>0<span> / mo</span></div>
                            <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #65c600;">Starter Plan</h3>
                            <div class="price"><sup>$</sup>19<span> / mo</span></div>
                            <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <h3 style="color: #ff901c;">Business Plan</h3>
                            <div class="price"><sup>$</sup>29<span> / mo</span></div>
                            <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <h3 style="color: #ff0071;">Ultimate Plan</h3>
                            <div class="price"><sup>$</sup>49<span> / mo</span></div>
                            <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Pricing Section -->

        --}}
        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        Apa Itu Dema?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        dema adalah
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        kenapa.......?
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">

                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="faqlist2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-1">
                                        Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                    </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-2">
                                        Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                    </button>
                                </h2>
                                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-3">
                                        Varius vel pharetra vel turpis nunc eget lorem dolor?
                                    </button>
                                </h2>
                                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                        integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                        eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                        Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                                        Nibh tellus molestie nunc non blandit massa enim nec.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End F.A.Q Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Testimonials</h2>
                    <p>What they are saying about us</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('template/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('template/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('template/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('template/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('template/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Clients</h2>
                    <p>Temporibus omnis officia</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-1.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-2.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-3.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-4.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-5.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-6.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-7.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('template/assets/img/clients/client-8.png') }}" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->

            <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Galery</h2>
          <p>Latest Galery</p>
        </header>

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
                                class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="{{ asset('img/'. $item->img) }}" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach

        </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </header>

                <div class="row">

                  @foreach ($postLatest ->take(3) as $item)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ asset('img/'. $item->img) }}" class="img-fluid"
                                    alt="" style="width: 400px; height:250px; object-fit:cover"></div>
                            <span class="post-date"><time datetime="{{ $item->created_at->format('Y-m-d') }}">{{ $item->created_at->format('d M, Y') }}</time></span>
                            <h3 class="post-title">{{ $item->title }}
                            </h3>
                            <a href="/article-dema-uninus/{{ $item->slug }}" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
