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
        Schema::create('populations', function (Blueprint $table) {
            $table->id();
            $table->integer('total_population')->unsigned()->nullable();
            $table->integer('male')->unsigned()->nullable();
            $table->integer('female')->unsigned()->nullable();
            $table->integer('family')->unsigned()->nullable();
            $table->integer('temporary')->unsigned()->nullable();
            $table->integer('mutation')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('populations');
    }
};
