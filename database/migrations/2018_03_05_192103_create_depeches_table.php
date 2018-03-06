<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depeches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('members');
            $table->integer('achievementpoints');
            $table->mediumText('about');
            $table->mediumText('mythicRaiding');
            $table->string('discord');
            $table->string('raiderio');
            $table->string('wowprogress');
            $table->string('armory');
            $table->string('latestMythicKill');
            $table->string('realm');
            $table->string('faction');
            $table->boolean('recruitment')->nullable();
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
        Schema::dropIfExists('depeches');
    }
}
