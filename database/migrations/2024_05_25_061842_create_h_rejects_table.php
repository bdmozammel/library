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
        Schema::create('h_rejects', function (Blueprint $table) {
            $table->id();
            $table->string('litho');
            $table->integer('sub_code');
            $table->integer('eb_no');
            $table->integer('sl_no');
            $table->integer('marks');
            $table->integer('chng_marks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_rejects');
    }
};
