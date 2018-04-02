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
            $table->longText('description');
            $table->string('place');
            $table->string('youtube_src')->nullable();
            $table->string('twitter_src')->nullable();;
            $table->string('speakersdeck_src')->nullable();
            $table->timestamps();
        });

        DB::table('talks')->insert([
            'title' => 'Illuminate console applications with Laravel Zero',
            'description' => "While it's fun to write little one-off utility scripts, sometimes you need to write real console apps. One that takes arguments and plays nicely with UNIX conventions for input, output or error reporting. </br></br>In this talk, I have showed Laravel Zero, a micro-framework that leverages an unofficial and customized version of Laravel to provide an elegant starting point for your console app.",
            'place' => 'Laravel Meetup, Paris.',
            'youtube_src' => 'https://www.youtube.com/embed/JWm0NhEzSg0',
        ]);

        DB::table('talks')->insert([
            'title' => 'Illuminate console applications with Laravel Zero',
            'description' => "While it's fun to write little one-off utility scripts, sometimes you need to write real console apps. One that takes arguments and plays nicely with UNIX conventions for input, output or error reporting. </br></br>In this talk, I have showed Laravel Zero, a micro-framework that leverages an unofficial and customized version of Laravel to provide an elegant starting point for your console app.",
            'place' => 'PHP Antwerp, Belgium.',
            'twitter_src' => '<blockquote class="twitter-tweet tw-align-center" data-lang="en"><p lang="en" dir="ltr">Yesterday I really felt that I was on a small Laracon in <a href="https://twitter.com/phpantwerp?ref_src=twsrc%5Etfw">@phpantwerp</a>. Great moments provided by the <a href="https://twitter.com/laravelphp?ref_src=twsrc%5Etfw">@laravelphp</a> community. Looking forward to repeating more moments like this! Thanks for having me! 💖 <a href="https://t.co/6UtslKF8kF">pic.twitter.com/6UtslKF8kF</a></p>&mdash; Nuno Maduro 💡 (@enunomaduro) <a href="https://twitter.com/enunomaduro/status/969206094177370112?ref_src=twsrc%5Etfw">March 1, 2018</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>'
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
