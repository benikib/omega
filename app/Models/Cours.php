<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule',
        'ponderation'];

        public function professeur() {
            return $this->belongsTo(Professeur::class);
         }
}
