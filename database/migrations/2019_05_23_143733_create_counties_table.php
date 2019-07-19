<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counties', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('district_id')->unsigned()->index('district_id');
            $table->bigInteger('county_id')->unsigned()->index('county_id');
            $table->string('name', 128);
            $table->timestamps();

             //Relation
            $table->foreign('district_id')->references('district_id')->on('districts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counties');
    }
}
