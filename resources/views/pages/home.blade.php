@extends('layouts.layout')

@section('title', 'Разработка веб-сайтов и информационных систем')

@section('content')

<!-- Intro -->
<div class="container text-center">
    <br> <br>
    <h2 class="thin">The best place to tell people why they are here</h2>
    <p class="text-muted">
        The difference between involvement and commitment is like an eggs-and-ham breakfast:<br>
        the chicken was involved; the pig was committed.
    </p>
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

<div class="container">
    <div class="row">
        <div class="pt-60">
            {!! $page->content !!}
        </div>
    </div>
</div>

@endsection
