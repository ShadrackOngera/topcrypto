@extends('layouts.app')
@section('content')
    <div class="div banner-home">
        <div class="container text-center text-white">
            <h1 class="display-3">Leave us a Message</h1>
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, natus.</h5>
        </div>
    </div>
    <div class="py-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('images/pics/phone-cream.jpg') }}" alt="..." class="img-fluid">
            </div>
            <div class="col-sm-6">
                <contact-form-component></contact-form-component>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
@endsection
