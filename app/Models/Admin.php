<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Formation()
    {
        return $this->hasMany(Formation::class);
    }
    public function users()
    {
        return $this->hasOne(User::class);
    }

}
