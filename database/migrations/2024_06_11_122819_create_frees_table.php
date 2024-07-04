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
        Schema::create('frees', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('invite_userid')->nullable();
            $table->string('invite');
            $table->string('created_date')->nullable();
            $table->string('ended_date')->nullable();
            $table->string('flag')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frees');
    }
};
