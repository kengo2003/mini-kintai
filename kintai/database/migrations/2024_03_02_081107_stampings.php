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
        Schema::create('stampings', function (Blueprint $table) {
            $table->id();
            $table->timestamp('stampped_at');
            $table->integer('stamp_type');
            $table->timestamps();
            $table->boolean('is_correction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stampings', function (Blueprint $table) {
            //
        });
    }
};
