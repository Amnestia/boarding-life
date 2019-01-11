<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraint();
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('type');
            $table->double('longitude');
            $table->double('latitude');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraint();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraint();
        Schema::dropIfExists('locations');
        Schema::enableForeignKeyConstraint();
    }
}
