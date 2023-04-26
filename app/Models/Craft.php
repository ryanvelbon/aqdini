<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Craft extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'icon',
        'synonyms',
        'priority',
        'img',
    ];

    public function profiles(): HasMany
    {
        return $this->hasMany(Profile::class);
    }
}
