<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'id_quiz',

    ];

        public function autre() {
            return $this->belongsTo(Autre::class);
         }
}
