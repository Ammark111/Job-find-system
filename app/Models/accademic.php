<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class accademic extends Model
{
    public function personal(): BelongsTo {
        return $this->BelongsTo(personal::class);
    }
}
