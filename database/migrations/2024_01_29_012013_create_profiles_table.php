<?php

use App\Models\VillageStatus;
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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('potency');
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->foreignIdFor(VillageStatus::class)->nullable()->references("id")->on("village_statuses")->onDelete("set null");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
