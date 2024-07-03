<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function note(){
        return $this->hasOne(Note::class);
    }
    public function users(){
        return $this->hasOne(User::class);
    }

}
