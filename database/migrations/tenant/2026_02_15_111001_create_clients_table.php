<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('phone')->nullable(); // Encriptado por modelo
            $table->date('birthdate')->nullable();
            $table->dateTime('last_contact_at')->nullable();
            $table->dateTime('next_contact_at')->nullable();
            $table->text('human_detail'); // Encriptado por modelo (Obligatorio)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
