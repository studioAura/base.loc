<ul class="nav navbar-nav pull-right">
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
    @endforeach
    <li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
</ul>

{{--    <li class="active"><a href="#">Home</a></li>--}}
{{--    <li><a href="about.html">About</a></li>--}}
{{--    <li class="dropdown">--}}
{{--        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>--}}
{{--        <ul class="dropdown-menu">--}}
{{--            <li><a href="sidebar-left.html">Left Sidebar</a></li>--}}
{{--            <li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>--}}
{{--        </ul>--}}
{{--    </li>--}}
{{--    <li><a href="contact.html">Contact</a></li>--}}
