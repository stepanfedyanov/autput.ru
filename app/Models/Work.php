<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Work extends Model
{
    use HasFactory;
    public function colleagues() : BelongsToMany
    {
        return $this->belongsToMany(Colleague::class);
    }
}
