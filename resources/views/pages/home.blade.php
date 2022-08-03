@extends('layouts.app')
@section('content')
    <div class="banner-home text-white text-center">
        <div class="container text-center text-uppercase">
            <h1 class="display-2 fw-bold">Top-crypto</h1>
            <h5>Take a look at the top most performing crypto currencies in real time.</h5>
        </div>
    </div>
    <div class="py-5"></div>
    <div>
        <div class="container">
            <crypto-lists-component :currencies="{{ json_encode($currencies)  }}"></crypto-lists-component>
        </div>
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>
@endsection
