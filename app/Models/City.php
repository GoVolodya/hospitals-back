<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    /**
     * Indicates which fields are fillable.
     *
     * @var string[]
     */
    protected $fillable = ['name'];

    /**
     * This city has many hospitals.
     *
     * @return HasMany
     */
    public function hospitals(): HasMany
    {
      return $this->hasMany(Hospital::class);
    }
}
