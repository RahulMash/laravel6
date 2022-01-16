<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Ajax extends Model
{
    protected $table = "ajaxes";
    protected $fillable = ['name','email'];
}
