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
                <form action="{{ route('message.store') }}" method="post">
                    @csrf
                    <h3 class="text-center">Leave a message for us</h3>

                    <div class="form-floating mb-3">
                        <input type="text" name="firstName" class="form-control" id="floatingInput" placeholder="First Name">
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="lastName" class="form-control" id="floatingInput" placeholder="Last Name">
                        <label for="floatingInput">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Example@email.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-5">
                        <textarea class="form-control" name="description" placeholder="Leave your Message here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Message</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary text-white fw-bold" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
@endsection
