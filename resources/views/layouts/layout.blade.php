<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body class="home">

@include('includes.navbar')

@if( isset($page->id) and $page->id == 1)
@include('includes.header')
@endif

@yield('content')

@include('includes.footer')
</body>
</html>

