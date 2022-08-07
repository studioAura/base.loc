<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Page extends Model
{
    use Translatable;
    protected $translatable = ['title', 'content'];

    protected $guarded = false;
    protected $table = 'pages';
}
