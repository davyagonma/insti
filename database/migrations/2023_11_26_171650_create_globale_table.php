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
        Schema::create('globale', function (Blueprint $table) {
            $table->id();
            $table->string('data_type');
            $table->string('data_cat')->unique();
            $table->string('cat_name');
            $table->string('cat_desc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('globale');
    }
};
