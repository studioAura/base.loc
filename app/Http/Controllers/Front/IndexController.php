<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Service;

class IndexController extends Controller
{
    public function __invoke()
    {
        $page = Page::where('id', 1)->first();
        $services = Service::take(4)->get();
        return(view('pages.home', compact('page', 'services')));
    }
}
