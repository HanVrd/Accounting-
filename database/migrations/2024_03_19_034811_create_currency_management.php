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
        Schema::create('currency', function (Blueprint $table) {
            $table->id();
            $table->string('currency_code');
            $table->string('currency_name');
            $table->string('currency_desc');
            $table->enum('currency_status', ['active', 'not active']);
            $table->foreignId('id_modul')->references('id_modul')->on('modul_form');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currency_management');
    }
};
