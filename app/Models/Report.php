<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Report extends Model
{
    protected $fillable = [
        'user_id',
        'province',
        'regency',
        'subdistrict',
        'village',
        'type',
        'description',
        'image',    
    ];

    public function responses(): HasOne
    {
        return $this->hasOne(Response::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
