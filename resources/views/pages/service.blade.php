@extends('layouts.layout')

@section('title', $service->title )

@section('content')

    <!-- Intro -->
    <div class="container text-center pt-60">
        <div class="pt-60">
            <h1>{{ $service->title }}</h1>
        </div>
    </div>
    <!-- /Intro-->

    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">

            <div class="page-image">
                <img class="img-responsive" src="{{Voyager::image($service->image)}}" alt="">
            </div>

            <div class="row pt-60">
                {!! $service->content !!}
            </div> <!-- /row  -->

        </div>
    </div>
    <!-- /Highlights -->

@endsection

