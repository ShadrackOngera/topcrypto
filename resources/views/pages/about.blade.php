@extends('layouts.app')
@section('content')
    <div class="div banner-home">
        <div class="container text-white text-center">
            <h1 class="display-3 fw-bold">Who we are</h1>
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, natus.</h5>
        </div>
    </div>
    <div class="py-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('images/pics/phone-dark.png') }}" alt="..." class="img-fluid">
            </div>
            <div class="col-sm-6">
                <h2>Lorem ipsum dolor sit.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid animi architecto at atque dolores eos exercitationem inventore magnam nulla numquam odio optio quam, quisquam repellat, repellendus temporibus tenetur ullam? Beatae, consequatur dolores ducimus eligendi et exercitationem fuga illum iure laboriosam magnam non officiis, possimus quibusdam sequi sint sunt vel.
                </p>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>
@endsection
