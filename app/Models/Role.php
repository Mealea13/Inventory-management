<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'level'
    ];

    /**
     * Define the relationship between the Role and User models.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
