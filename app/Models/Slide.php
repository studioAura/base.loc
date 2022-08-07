<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Slide extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $guarded = false;
    protected $table = 'slides';

}
