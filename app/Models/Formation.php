<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'path',
        'admin_id'
    ];

        public function admin() {
            return $this->belongsTo(Admin::class);
         }
         public function Formation(){
            return $this->hasOne(Formation::class);
        }
}
