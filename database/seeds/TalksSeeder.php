<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TalksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talks')->insert([
            'title' => 'Illuminate console applications with Laravel Zero.',
            'description' => 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.',
            'place' => 'Laravel Meetup, Paris.',
            'youtube_src' => 'https://www.youtube.com/embed/JWm0NhEzSg0'
        ]);
    }
}
