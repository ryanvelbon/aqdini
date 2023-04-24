<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Craft extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'icon',
        'synonyms',
    ];
}
