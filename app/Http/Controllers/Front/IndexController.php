<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $page = Page::where('id', 1)->first();
        return(view('pages.home', compact('page')));
    }
}
