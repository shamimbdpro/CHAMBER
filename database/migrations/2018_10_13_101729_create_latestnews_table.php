<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatestnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latestnews', function (Blueprint $table) {
            $table->increments('latestnews_id');
            $table->string('latestnews_title');
            $table->string('latestnews_des');
            $table->string('latestnews_file');
            $table->string('latestnews_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('latestnews');
    }
}
