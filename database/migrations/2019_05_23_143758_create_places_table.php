<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('district_id')->unsigned()->index('district_id');
            $table->bigInteger('county_id')->unsigned()->index('county_id');
            $table->bigInteger('place_id')->unsigned()->index('place_id');
            $table->string('name', 128);
            $table->char('CP4', 4);
            $table->char('CP3', 3);
            $table->string('CPALF', 96);
            $table->float('latitude', 10, 0);
            $table->float('longitude', 10, 0);
            $table->index(['CP4','CP3'], 'idx_cp');

            $table->timestamps();

            //Relation
            $table->foreign('district_id')->references('district_id')->on('districts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('county_id')->references('county_id')->on('counties')
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
        Schema::dropIfExists('places');
    }
}
