<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video=new Video();
        $video->title='Nuevo orden';
        $video->route='https://www.youtube.com/embed/hPzZ9QvV39k';
        $video->description='Nuevo orden es una película de suspenso distópica de arte';
        $video->user_id='1';
        $video->time='180';
        $video->save();

        $video=new Video();
        $video->title='Pequeños detalles';
        $video->route='https://www.youtube.com/embed/GovsRD2NA0M';
        $video->description='Es una película de suspenso policial neo-noir estadounidense';
        $video->user_id='1';
        $video->time='220';
        $video->save();
    }
}
