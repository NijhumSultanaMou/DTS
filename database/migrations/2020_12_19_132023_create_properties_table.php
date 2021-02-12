<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mobile');
            $table->string('division');
            $table->string('district');
            $table->string('location');
            $table->string('tenant_type');
            $table->string('lift');
            $table->string('rent');
            $table->string('room_quantity');
            $table->string('washroom_quantity');
            $table->string('balcony_quantity');
            $table->string('floor');
            $table->mediumText('image')->nullable();
            $table->string('more');
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
        Schema::dropIfExists('properties');
    }
}
