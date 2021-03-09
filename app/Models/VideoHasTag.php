<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoHasTag extends Model
{
    use HasFactory;

    public function tag(){
        return $this->belongsTo(Tag::class, 'id', 'tags_id');
    }

    public function video(){
        return $this->belongsTo(Video::class, 'id', 'video_id');
    }

}
