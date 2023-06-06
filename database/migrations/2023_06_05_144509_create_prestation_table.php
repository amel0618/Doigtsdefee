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
        Schema::create('presation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prestation_id');
            $table->string('nom');
            $table->text('description');
            $table->int('prix');
            $table->time('temps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presation');
    }
};
