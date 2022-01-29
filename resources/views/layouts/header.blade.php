@if(Route::currentRouteName() == 'index')
<header class="sticky-top">
<nav class="nav-cs navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="" width="50">
        <!-- <img src="https://dummyimage.com/300" alt="" width="80"> -->
        <div class="d-none d-sm-block">
          <span class="ms-3 text-header title-1">$ H B E R E U M</span>
        </div>
    </a>
    <div class="d-sm-none d-block ms-auto">
      <a href="https://www.dextools.io/app/bsc/pair-explorer/0x2911a0fefc09d97b69847c11b697ba017bde7944" target="_blank" class="btn btn-primary p-2">Buy Token</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="z-index:1">
      <i class="bi bi-list text-white h3"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-top">
        <li class="nav-item">
          <a class="nav-link pointer" onClick="ouTer('#home')">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pointer" onClick="ouTer('#about')">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pointer" onClick="ouTer('#roadmaps')">Roadmaps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pointer" onClick="ouTer('#tokenomics')">Tokenomics</a>
        </li>
        
        <li class="nav-item d-none d-sm-block">
          <a class="btn btn-primary" href="https://www.dextools.io/app/bsc/pair-explorer/0x2911a0fefc09d97b69847c11b697ba017bde7944" target="_blank">Buy Token</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</header>
@endif