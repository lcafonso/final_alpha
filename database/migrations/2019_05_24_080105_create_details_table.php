<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('latitude', 128)->nullable();
            $table->string('longitude', 128)->nullable();
            $table->string('equipment', 128)->nullable();
            $table->string('exposure', 128)->nullable();
            $table->string('aperture', 128)->nulable();
            $table->string('iso', 128)->nullable();
            $table->integer('dimensionX')->unsigned()->nullable();
            $table->integer('dimensionY')->unsigned()->nullable();
            $table->string('resolution',128)->nullable();

            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('technologie_id')->unsigned();
            $table->bigInteger('place_id')->unsigned()->nullable();

            $table->timestamps();

            //Relation
            $table->foreign('post_id')->references('id')->on('posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('technologie_id')->references('id')->on('technologies')
                ->onDelete('cascade')
                ->onUpdate('cascade');

//            $table->foreign('place_id')->references('place_id')->on('places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
