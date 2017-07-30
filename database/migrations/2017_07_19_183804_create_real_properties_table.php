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
            $table->string('title');
            $table->longText('description');
            $table->bigInteger('disposition')->nullable();
            $table->bigInteger('type')->nullable();
            $table->float('price');
            $table->float('deposit');
            $table->float('area');
            $table->bigInteger('condition')->nullable(); 
            $table->bigInteger('equiped')->nullable();
            $table->binary('parameters')->nullable();  
            $table->string('address_street');       
            $table->string('address_city');
            $table->binary('images')->nullable();
            $table->date('available_from'); 
            $table->timestamps();
            $table->bigInteger('user_id')->nullable();
            $table->boolean('published');
            $table->boolean('active');
            $table->string('url');
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
