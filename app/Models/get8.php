<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;


class get8 extends Model
{
    protected $collection = 'get8';
    protected $fillable = ['hash','name','family','key','url','img_name','update'];

}
