<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Response extends Model
{
    public function responseProgress(): HasMany
    {
        return $this->hasMany(ResponseProgres::class);
    }  

    public function reports(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public const ON_PROCESS = 'ON_PROCESS';
    public const DONE = 'DONE';
    public const REJECT = 'REJECT';
}
