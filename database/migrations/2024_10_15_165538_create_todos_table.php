<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo');
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });

    }
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};