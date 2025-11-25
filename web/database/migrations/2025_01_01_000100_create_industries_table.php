<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('sector')->nullable();
            $table->string('province')->nullable();
            $table->string('pic_name')->nullable();
            $table->string('pic_email')->nullable();
            $table->unsignedInteger('slots')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('industries');
    }
};


