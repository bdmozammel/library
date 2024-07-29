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
        Schema::create('m_rejects', function (Blueprint $table) {
            $table->id();
            $table->string('answer');
            $table->integer('roll_no');
            $table->integer('reg_no');
            $table->integer('set_code');
            $table->integer('sub_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_rejects');
    }
};
