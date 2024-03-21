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
    protected $fillable = ['slug', 'secondName', 'firstName', 'lastName', 'jobTitle', 'socialLinkName', 'socialLink', 'avatar', 'cover'];

    public function works() : BelongsToMany
    {
        return $this->belongsToMany(Work::class);
    }
}
