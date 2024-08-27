@extends('layouts.page')

@section('title', 'Inicio')


@section('page-content')
    <!-- hero start -->
    <section class="hero">
      <div class="hero__shape"><img src="assets/page/images/elements/hero-shape.jpg.png" alt="image"></div>
      <div class="hero__element"><img src="assets/page/images/elements/hero-building.png" alt="image"></div>
      <div class="hero__car wow bounceIn" data-wow-duration="0.5s" data-wow-delay="1s">
        <img src="assets/page/images/elements/car-shadow.png" alt="image" class="car-shadow">
        <img src="assets/page/images/elements/car-ray.png" alt="image" class="car-ray">
        <img src="assets/page/images/elements/car-light.png" alt="image" class="car-light">
        <img src="assets/page/images/elements/hero-car.png" alt="image" class="hero-car">
        <img src="assets/page/images/elements/car-star.png" alt="image" class="car-star">
      </div>
      <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
          <div class="col-lg-6 col-md-8">
            <div class="hero__content">
              <div class="hero__subtitle wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">Contest FOR YOUR CHANCE to</div>
              <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">big win</h2>
              <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">Now's your chance to win a car! Check out the prestige cars you can win in our car prize draws. Will you be our next lucky winner?</p>
              <div class="hero__btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                <a href="contest.html" class="cmn-btn">Participate Now</a>
                <a class="video-btn" href="https://www.youtube.com/embed/d6xn5uflUjg" data-rel="lightcase:myCollection"><i class="fas fa-play"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero__thumb">
              <img src="assets/page/images/elements/car-main.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero start -->
@endsection

@push('scripts')
  <script type="text/javascript">
    console.log("script de prueba")
  </script>
@endpush
