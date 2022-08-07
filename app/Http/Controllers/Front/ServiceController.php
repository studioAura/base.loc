<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function __invoke($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return(view('pages.service', compact('service')));
    }
}
