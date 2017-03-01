<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('home_user_id');
            $table->integer('home_score');
            $table->integer('away_user_id')->default(0);
            $table->integer('away_score')->default(0);
            $table->boolean('bulleyes')->default(true);
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
        Schema::drop('matches');
    }
}
