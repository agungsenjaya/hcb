@extends('layouts.index')
@section('content')
<section class="min-vh-100 d-flex align-items-center justify-content-center text-white">
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4 text-center">
                <img src="{{ asset('img/logo.png') }}" alt="" width="30%">
            <h1 class="display-6 fw-bold text-uppercase mt-3">404</h1>
            <p class="lead">Sorry, the page you are referring to could not be found, please check again</p>
            <a href="{{ route('index') }}" class="btn btn-primary">Back Home</a>
            </div>
        </div>
    </div>
</section>
@endsection
@section('meta')
<title>$HBEREUM | 404</title>
<meta property="og:title" content="$HBEREUM | 404" />
@endsection