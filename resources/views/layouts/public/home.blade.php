@extends('layouts.public.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
    <img src="{{asset('img/slide/slide-1.jpg')}}" alt="">


      </div>



    </div>
  </section><!-- End Hero -->

  <main id="main">


   
    <!-- ======= Recent Photos Section ======= -->
    <section id="recent-photos" class="recent-photos">
      <div class="container">

        <div class="section-title">
          <h2>Recent Photos</h2>
          <p>Dive into our recent moments captured in captivating frames. Explore our gallery showcasing the latest snapshots, each telling a story of cherished memories and unforgettable experiences.</p>
        </div>

        <div class="recent-photos-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="{{('img/recent-photos/-photos-1.jpg')}}" class="glightbox"><img src="{{('img/recent-phot-photos-1.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('img/recent-photos/recent-photos-2.jpg')}}" class="glightbox"><img src="{{asset('img/recent-photos/recent-photos-2.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('img/recent-photos/recent-photos-3.jpg')}}" class="glightbox"><img src="{{asset('img/recent-photos/recent-photos-3.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('img/recent-photos/recent-photos-3.jpg')}}" class="glightbox"><img src="{{asset('img/recent-photos/recent-photos-3.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{('img/recent-photos/recent-photos-3.jpg')}}" class="glightbox"><img src="{{('img/recent-phoecent-photos-3.jpg')}}" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Recent Photos Section -->

  </main><!-- End #main -->
  @endsection