<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = ["token"];

    /**
     * Get all of the publicaciones for the Usuario
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function publicaciones()
    {
        return $this->hasMany(Post::class);
    }
}
