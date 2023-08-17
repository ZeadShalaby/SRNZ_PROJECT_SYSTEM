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
        Schema::create('srnz_edit', function (Blueprint $table) {
          $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('gmail');
            $table->string('password');
            $table->string('phone');
            $table->string('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('srnz_edit');
    }
};
