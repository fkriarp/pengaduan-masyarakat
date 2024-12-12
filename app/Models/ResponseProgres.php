<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResponseProgres extends Model
{
    public function response(): BelongsTo
    {
        return $this->belongsTo(Response::class);
    }
}
