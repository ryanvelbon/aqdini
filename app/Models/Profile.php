<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'bio',
        'profile_pic',
        'years_xp',
        'availability',
        'craft_id',
        'locality_id',
        'phone',
        'facebook',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function craft(): BelongsTo
    {
        return $this->belongsTo(Craft::class);
    }

    public function locality(): BelongsTo
    {
        return $this->belongsTo(Locality::class);
    }
}
