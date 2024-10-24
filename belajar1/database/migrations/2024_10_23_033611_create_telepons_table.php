<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('telepons', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_telepon', 20);
            $table->unsignedBigInteger('pengguna_id');
            $table->timestamps();

            $table->foreign('pengguna_id')->references('id')->on('penggunas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telepons');
    }
};
