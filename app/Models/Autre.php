<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autre extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'type',
        'description',
        'path',
        'admin_id',
        'questionnaire'
    ];

        public function admin() {
            return $this->belongsTo(Admin::class);
         }
         public function notes(){
            return $this->hasOne(Note::class);
        }
}
