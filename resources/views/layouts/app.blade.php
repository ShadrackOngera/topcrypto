@extends('layouts.master')

@section('design')

    @include('partials.header')

    <div class="wrapper-main">
        @yield('content')
    </div>

    @include('partials.footer')

@endsection

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
