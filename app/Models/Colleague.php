<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Colleague extends Model
{
    use HasFactory;
    protected $primaryKey = 'slug';
    protected $keyType = 'string';
    public $incrementing = false;
    public function works() : BelongsToMany
    {
        return $this->belongsToMany(Work::class);
    }
}
