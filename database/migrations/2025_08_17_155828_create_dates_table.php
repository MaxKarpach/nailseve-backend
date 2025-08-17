<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->boolean('isAlreadyChosen')->default(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dates');
    }
};
