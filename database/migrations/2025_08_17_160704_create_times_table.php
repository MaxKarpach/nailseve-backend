<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('times', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->boolean('isAlreadyChosen')->default(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('times');
    }
};

