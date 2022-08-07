@extends('layouts.layout')

@section('title', 'Про себе')

@section('content')

    <!-- Intro -->
    <div class="container text-center pt-60">
        <br> <br>
        <h2 class="thin">Про себе</h2>
    </div>
    <!-- /Intro-->

    <div class="container pt-40">
        <div class="row">
            <div class="page-image">
                <img class="img-responsive" src="{{Voyager::image($page->image)}}" alt="">
            </div>
            <div class="pt-60">
                {!! $page->content !!}
            </div>
        </div>
    </div>

@endsection
