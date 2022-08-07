<ul class="nav navbar-nav pull-right">
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
    @endforeach
    <li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
</ul>
