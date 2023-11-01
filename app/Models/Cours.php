<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table = 'cours';
    protected $fillable = [
        'intitule',
        'ponderation'];

        // public function users()
        // {
        //     return $this->belongsToMany(User::class)->withPivot('id');
        // }
}
