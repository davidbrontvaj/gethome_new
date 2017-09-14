<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('disposition')->nullable();
            $table->bigInteger('type')->nullable();
            $table->float('price')->nullable();
            $table->float('deposit')->nullable();
            $table->float('area')->nullable();
            $table->bigInteger('condition')->nullable(); 
            $table->bigInteger('equiped')->nullable();
            $table->binary('parameters')->nullable();  
            $table->string('address_street')->nullable();
            $table->string('address_city')->nullable();
            $table->binary('images')->nullable();
            $table->date('available_from')->nullable();
            $table->timestamps();
            $table->bigInteger('user_id')->nullable();
            $table->boolean('published')->nullable();
            $table->boolean('active')->nullable();
            $table->string('url')->nullable();
            $table->bigInteger('no_user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_properties');
    }
}
