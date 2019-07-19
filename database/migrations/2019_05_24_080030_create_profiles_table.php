<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 128)->nullable();
            $table->string('surname', 128)->nullable();
            $table->string('file',128)->nullable();
            $table->string('local')->nullable();
            $table->string('country')->nullable();
            $table->date('birth')->nullable();;
            $table->enum('genre', ['MALE', 'FEMALE'])->default('MALE');
            $table->text('body')->nullable();
            $table->string('social1',128)->nullable();
            $table->string('social2',128)->nullable();
            $table->string('social3',128)->nullable();
            $table->string('web',128)->nullable();
            $table->string('phone',128)->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();

            $table->timestamps();

            //Relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('role_id')->references('id')->on('roles')
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
        Schema::dropIfExists('profiles');
    }
}
