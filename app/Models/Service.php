<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Service extends Model
{
    use Translatable;
    protected $translatable = ['title', 'description', 'content'];

    protected $guarded = false;
    protected $table = 'services';
}
