<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $page = Page::where('id', 2)->first();
        return(view('pages.about', compact('page')));
    }
}
