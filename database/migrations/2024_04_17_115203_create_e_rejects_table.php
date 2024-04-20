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
        Schema::create('e_rejects', function (Blueprint $table) {
            $table->id();
            $table->integer('sub_code');
            $table->string('litho');
            $table->integer('roll_no');
            $table->integer('reg_no');
            $table->integer('addl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_rejects');
    }
};
