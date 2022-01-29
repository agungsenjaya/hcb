@extends('layouts.index')
@section('content')
<!-- <img src="{{ asset('img/hero.jpg') }}" alt="" width="100%"> -->
<!-- <img src="https://dummyimage.com/1349x700" alt="" width="100%"> -->
<div class="position-relative" id="home">
  <div class="d-none d-sm-block">
    <img src="{{ asset('img/hero-2.jpg') }}" alt="" width="100%">
  </div>
  <div class="d-sm-none d-block">
    <!-- <div style="background:url({{ asset('img/hero-2.jpg') }});background-size:cover;height:70vh;background-position:center"></div> -->
    <img src="https://dummyimage.com/500x800" alt="" width="100%">
  </div>
    <div class="grad-top to-top"></div>
    <div class="grad-bottom to-bottom">
        <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card card-cs text-white rounded-cs">
                    <div class="">
                        <div class="row g-0 overflow-hidden">
                            <div class="col-md-6">
                                <div class="media p-4" data-aos="zoom-out">
                                    <div class="media-body">
                                        <p class="fw-bold mb-1 text-uppercase mb-0">Total Holders</p>
                                        <h3 class="supply">{{ $sabu }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 card-cs rounded-cs-end">
                                <div class="media p-4" data-aos="zoom-out" data-aos-delay="100">
                                    <div class="media-body">
                                        <p class="fw-bold mb-1 text-uppercase mb-0">Total Holders</p>
                                        <h3 class="holders">{{ $saba }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<section class="text-white mt-5 mt-md-0" id="about">
    <div class="container">
        <div class="row">
        <div class="col-md-10 offset-md-1">
        <div class="row overflow-hidden">
            <div class="col-md-5 align-self-center" data-aos="fade-up">
                <h1 class="display-6 fw-bold text-uppercase">What Is <br> $HBEREUM Token</h1>
                <!-- <p class="lead">$Hbereum will become the world's largest meme* token and will boost Elon Musk's crypto world (I like to say anything, I'm a dev)</p> -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus alias nam earum distinctio assumenda, voluptatem hic ad reiciendis voluptatibus. Temporibus aliquam est delectus voluptatum, dolore recusandae corrupti fugit consectetur vel.</p>
                <a href="" class="btn btn-primary">Whitepaper</a>
            </div>
            <div class="col-md-7 d-none d-sm-block">
                <div class="position-relative">
                    <img src="{{ asset('img/home-1.jpg') }}" alt="" width="100%">
                    <div class="to-top grad-top-2"></div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- <img src="{{ asset('img/line-1.png') }}" alt="" width="100%"> -->
    </div>
</section>
<section class="space-m text-white" id="roadmaps">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="display-6 fw-bold text-uppercase">Roadmaps</h1>
        </div>

        <div class="bg-roadmaps">
        <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="row row-cols-1 row-cols-md-2 g-4 overflow-hidden">
  <div class="col">
    <div class="card card-cs rounded-cs h-100" data-aos="zoom-out">
      <div class="p-4">
        <h4 class="card-title text-uppercase"><i class="bi bi-pause me-2"></i>Phase 01</h4>
        <ul class="list-group list-group-flush list-road">
        <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Build Community</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Fairlaunch</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Give Away l</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Website launch henceut.io</li>
</ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card card-cs rounded-cs h-100" data-aos="zoom-out" data-aos-delay="100">
      <div class="p-4">
        <h4 class="card-title text-uppercase"><i class="bi bi-pause me-2"></i>Phase 02</h4>
        <ul class="list-group list-group-flush list-road">
        <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>First Ultility $HBEREUM Swap</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Give Away ll at 5K Member Telegram</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>1K Holder</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Hype Marketing </li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Social Charity</li>
</ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card card-cs rounded-cs h-100" data-aos="zoom-out" data-aos-delay="200">
      <div class="p-4">
        <h4 class="card-title text-uppercase"><i class="bi bi-pause me-2"></i>Phase 03</h4>
        <ul class="list-group list-group-flush list-road">
        <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Listing CoinGecko</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Listing CMC</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>10K Member Telegram</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Audit CertiK</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>3K Holder</li>
</ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card card-cs rounded-cs h-100" data-aos="zoom-out" data-aos-delay="300">
      <div class="p-4">
        <h4 class="card-title text-uppercase"><i class="bi bi-pause me-2"></i>Phase 04</h4>
        <ul class="list-group list-group-flush list-road">
        <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Brigde Polygon</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Launch Game P2E</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Partnership with Social Charity</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Create HBEREUM apps</li>
</ul>
      </div>
    </div>
  </div>
  
  
</div>


<div class="my-4 col-md-6 offset-md-3 overflow-hidden">

<div class="card card-cs rounded-cs h-100" data-aos="zoom-out" data-aos-delay="400">
      <div class="p-4">
        <h4 class="card-title text-uppercase text-center"><i class="bi bi-pause me-2"></i>Dream Roadmaps</h4>
        <ul class="list-group list-group-flush list-road">
        <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>CEX</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Create Blockchain HBEREUM-20/ HBEREUM-2</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>Top 100 Cypto Currency</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-primary"></i>2024 $0.1/HBEREUM</li>
</ul>
      </div>
    </div>
            
        </div>

</div>
</div>

</div>

    </div>
</section>
<section class="space-m text-white" id="tokenomics">
  <div class="container">
  <div class="text-center mb-4">
            <h1 class="display-6 fw-bold text-uppercase">Tokenomics</h1>
            <img src="{{ asset('img/line-1.png') }}" alt="" width="100%">
  </div>

  <div class="card-deck overflow-hidden">
  <div class="card rounded-cs card-cs" data-aos="zoom-out" data-aos-delay="100">
    <div class="card-body">
      <h5 class="card-title text-uppercase"><i class="bi bi-pause me-2"></i>TX Buy 10%</h5>
      <ul class="list-group list-group-flush list-road">
      <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-white"></i>6% Marketing</li>
      <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-white"></i>4% Liquidity</li>
      </ul>
    </div>
  </div>
  <div class="card rounded-cs bg-primary-2" data-aos="zoom-out">
    <div class="card-body">
      <h5 class="card-title text-uppercase"><i class="bi bi-pause me-2"></i>Allocation Supply</h5>
      <ul class="list-group list-group-flush list-road">
      <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-white"></i>67% Pancake </li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-white"></i>30% burn wallet</li>
<li class="list-group-item"><i class="bi bi-dash-lg me-2 text-white"></i>3% marketing wallet</li>
      </ul>
    </div>
  </div>
  <div class="card rounded-cs card-cs" data-aos="zoom-out" data-aos-delay="200">
    <div class="card-body">
      <h5 class="card-title text-uppercase"><i class="bi bi-pause me-2"></i>TX Sell 12%</h5>
      <ul class="list-group list-group-flush list-road">
      <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-white"></i>8% Marketing</li>
      <li class="list-group-item"><i class="bi bi-dash-lg me-2 text-white"></i>4% Liquidity</li>
      </ul>
    </div>
  </div>
</div>

  </div>
</section>
<section class="space-m text-white">
  <div class="container">

  <div class="text-center mb-4">
            <h1 class="display-6 fw-bold text-uppercase">Our Team</h1>
            <!-- <img src="{{ asset('img/line-1.png') }}" alt="" width="100%"> -->
  </div>

  <div class="swiper slide-1">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://dummyimage.com/200" alt="" width="100%" class="rounded-cs">
          <h3 class="my-4">Mark Manson</h3>
          <div class="badge p-2 bg-primary rounded-cs-2">
            Dev Hunter
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://dummyimage.com/200" alt="" width="100%" class="rounded-cs">
          <h3 class="my-4">Mark Manson</h3>
          <div class="badge p-2 bg-primary rounded-cs-2">
            Dev Hunter
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://dummyimage.com/200" alt="" width="100%" class="rounded-cs">
          <h3 class="my-4">Mark Manson</h3>
          <div class="badge p-2 bg-primary rounded-cs-2">
            Dev Hunter
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://dummyimage.com/200" alt="" width="100%" class="rounded-cs">
          <h3 class="my-4">Mark Manson</h3>
          <div class="badge p-2 bg-primary rounded-cs-2">
            Dev Hunter
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://dummyimage.com/200" alt="" width="100%" class="rounded-cs">
          <h3 class="my-4">Mark Manson</h3>
          <div class="badge p-2 bg-primary rounded-cs-2">
            Dev Hunter
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://dummyimage.com/200" alt="" width="100%" class="rounded-cs">
          <h3 class="my-4">Mark Manson</h3>
          <div class="badge p-2 bg-primary rounded-cs-2">
            Dev Hunter
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-relative mt-5"></div>
    </div>

  </div>
</section>
@endsection
@section('meta')
<title>$HBEREUM | THE BIGGEST TOKEN MEME*</title>
<meta property="og:title" content="$HBEREUM | THE BIGGEST TOKEN MEME*" />
<meta property="og:url" content="{{ url('') }}" />
<meta property="og:image" content="{{ asset('img/hero-2.jpg') }}" />
<meta property="og:description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vero sunt non. Nisi quo quam sequi reprehenderit voluptate. Obcaecati, error veniam? Omnis fuga odio eum nostrum aliquam placeat perferendis veniam!" />
@endsection