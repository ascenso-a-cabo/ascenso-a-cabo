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
        Schema::create('provincia_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_provincia')->constrained('provincias');
            $table->foreignId('id_user')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provincia_user');
    }
};
