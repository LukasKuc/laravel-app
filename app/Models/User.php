<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use HasFactory;

    public function scopeMostPopular(Builder $query) {
        return $query->where('views_count', '>', 10);
    }
}
