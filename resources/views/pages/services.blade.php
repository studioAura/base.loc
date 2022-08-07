@extends('layouts.layout')

@section('title', 'Послуги')

@section('content')

    <!-- Intro -->
    <div class="container text-center pt-60">
        <div class="pt-60">
            {!! $page->content !!}
        </div>
    </div>
    <!-- /Intro-->

    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">

            <h3 class="text-center thin">Наші послуги</h3>

            <div class="row">

                @foreach($services as $service)
                    <div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption"><h4><i class="{{ $service->icon }}"></i>{{ $service->title }}</h4></div>
                        <div class="h-body text-center">
                            {!! $service->description !!}
                        </div>
                        <div class="readmore text-center">
                            <a class="btn bg-info" href="/service/{{ $service->slug }}">Докладніше</a>
                        </div>
                    </div>
                @endforeach

            </div> <!-- /row  -->

        </div>
    </div>
    <!-- /Highlights -->

@endsection
