<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StaffProvince extends Model
{
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
