<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'route',
        'description',
        'user_id',
        'time',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function videohastag(){
        return $this->hasMany(VideoHasTag::class, 'video_id', 'id');
    }

    public function historie(){
        return $this->hasMany(Historie::class, 'video_id', 'id');
    }

    public function score(){
        return $this->hasMany(Score::class, 'video_id', 'id');
    }

    public function comment(){
        return $this->hasMany(Comment::class, 'video_id', 'id');
    }

}
