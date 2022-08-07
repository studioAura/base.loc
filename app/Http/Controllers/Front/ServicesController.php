<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __invoke()
    {
        $page = Page::where('id', 3)->first();
        $services = Service::take(4)->get();
        return(view('pages.services', compact('page', 'services')));
    }
}
