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
        Schema::create('village_aparatuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('pob')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('photo')->nullable();
            $table->string('education')->nullable();
            $table->string('job')->nullable();
            $table->enum('religion', ['Islam', 'Kristen Protestan', 'Kristen Katolik', 'Hindu', 'Buddha', 'Konghucu'])->default('Islam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('village_aparatuses');
    }
};
