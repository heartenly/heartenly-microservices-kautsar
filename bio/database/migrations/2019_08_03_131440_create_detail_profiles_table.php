<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_account');
            $table->integer('weight');//in cm
            $table->integer('height');//in kg
            $table->text('about_me');
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
        Schema::dropIfExists('detail_profiles');
    }
}
