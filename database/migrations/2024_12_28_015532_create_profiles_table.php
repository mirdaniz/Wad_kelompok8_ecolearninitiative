<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('gender');
        $table->string('email')->unique();
        $table->string('phone');
        $table->timestamps();
    });        
}

public function down()
{
    Schema::dropIfExists('profiles');
}



};
