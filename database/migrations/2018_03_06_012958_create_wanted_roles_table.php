<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWantedRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wanted_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('class');
            $table->string('spec');
            $table->mediumText('additionalInfo');
            $table->string('demand');
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
        Schema::dropIfExists('wanted_roles');
    }
}
