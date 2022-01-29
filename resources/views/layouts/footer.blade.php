@if(Route::currentRouteName() == 'index')
<footer class="text-white">
    <div class="container">
        <img src="{{ asset('img/line-1.png') }}" alt="" width="100%">
        <div class="row space-m">
            <div class="col-md-4 align-self-center d-flex justify-content-center">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
        <img src="{{ asset('img/logo.png') }}" alt="" width="50">
        <span class="ms-3 text-header title-1">$ H B E R E U M</span>
    </a>
            </div>
            <div class="col-md-4 mt-sm-0 mt-4 ps-sm-0 ps-4">
                <h4>Navigation</h4>

                <div class="list-group list-group-flush list-footer">
  <a onClick="ouTer('#home')" class="list-group-item pointer list-group-item-action"><i class="bi bi-dash-lg me-2 text-primary"></i>Home</a>
  <a onClick="ouTer('#about')" class="list-group-item pointer list-group-item-action"><i class="bi bi-dash-lg me-2 text-primary"></i>About</a>
  <a onClick="ouTer('#roadmaps')" class="list-group-item pointer list-group-item-action"><i class="bi bi-dash-lg me-2 text-primary"></i>Roadmaps</a>
  <a onClick="ouTer('#tokenomics')" class="list-group-item pointer list-group-item-action"><i class="bi bi-dash-lg me-2 text-primary"></i>Tokenomics</a>
</div>
                
            </div>
            <div class="col-md-4 d-none d-sm-block">
                <h4>Community</h4>

                <p class="lead">To get more information please join our community</p>

                <ul class="nav">
            <li class="nav-item align-self-center">
                <a class="nav-link ps-0" href="https://t.me/HenceutBeREUM_Global" target="_blank">
                    <div class="btn-icon bg-primary text-center">
                        <i class="bi bi-telegram text-white"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item align-self-center">
                <a class="nav-link ps-0" href="https://twitter.com/henceutbereum5" target="_blank">
                    <div class="btn-icon bg-primary text-center">
                        <i class="bi bi-twitter text-white"></i>
                    </div>
                </a>
            </li>
            </ul>
                
            </div>
        </div>
        <img src="{{ asset('img/line-1.png') }}" alt="" width="100%">
        <div class="space-m text-sm-start text-center">
            POWERED BY $HBEREUM TOKEN {{ date('Y') }}
        </div>
    </div>
</footer>
@endif