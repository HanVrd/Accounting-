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
        Schema::create('modul_form', function (Blueprint $table) {
            $table->id();
            $table->integer('modul_code')->unique();
            $table->unsignedBigInteger('id_group_modul');
            $table->foreign('id_group_modul')->references('id_group_modul')->on('group_modul');
            $table->string('group_modul_name');
            $table->string('modul_name');
            $table->string('modul_url');
            $table->string('modul_description');
            $table->enum('modul_status', ['active', 'not active',]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modul_form');
    }
};
