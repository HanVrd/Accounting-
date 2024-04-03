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
        Schema::create('tax', function (Blueprint $table) {
            $table->string('tax_code');
            $table->string('input_tax_coa');
            $table->string('output_tax_coa');
            $table->string('tax_name');
            $table->string('tax_description');
            $table->integer('tax_precentage');
            $table->integer('tax_method');
            $table->enum('tax_status', ['inclusive', 'exclusive']);
            $table->foreignId('id_modul')->references('id_modul')->on('modul_form');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_management');
    }
};
