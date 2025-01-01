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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            // Hapus foreign key dan buat user_id nullable atau dengan default value
            $table->unsignedBigInteger('user_id')->nullable(); // Jadikan nullable jika tidak ada login
            $table->string('activity_type'); // Jenis aktivitas (lesson, quiz, feedback, forum)
            $table->string('description'); // Deskripsi aktivitas
            $table->timestamp('activity_time'); // Tanggal dan waktu aktivitas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
};

