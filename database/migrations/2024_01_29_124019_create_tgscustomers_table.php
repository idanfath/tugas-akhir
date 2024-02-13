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
        Schema::create('tgscustomers', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->date('birth-date'); #yyyy-mm-dd
            $table->string('city');
            $table->string('description');
            $table->timestamp('last changed')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgscustomers');
    }
};
