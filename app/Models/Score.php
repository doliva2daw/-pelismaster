<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function video(){
        return $this->belongsTo(Video::class, 'id', 'video_id');
    }
}
