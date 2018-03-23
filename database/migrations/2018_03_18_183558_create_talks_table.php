<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('place');
            $table->string('youtube_src')->nullable();;
            $table->string('speakersdeck_src')->nullable();
            $table->timestamps();
        });

        DB::table('talks')->insert([
            'title' => 'Illuminate console applications with Laravel Zero',
            'description' => "While it's fun to write little one-off utility scripts, sometimes you need to write real console apps. One that takes arguments and plays nicely with UNIX conventions for input, output or error reporting. </br></br>In this talk, I have showed Laravel Zero, a micro-framework that leverages an unofficial and customized version of Laravel to provide an elegant starting point for your console app.",
            'place' => 'Laravel Meetup, Paris.',
            'youtube_src' => 'https://www.youtube.com/embed/JWm0NhEzSg0'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talks');
    }
}
