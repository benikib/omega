<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserver extends Model
{
    use HasFactory;
  protected $fillable = [
        'user_id',
        'formation_id',
        
    ];
    public function user() {
        return $this->hasOne(User::class);
     }
      
         public function formation(){
            return $this->belongsTo(Formation::class);
        }
}