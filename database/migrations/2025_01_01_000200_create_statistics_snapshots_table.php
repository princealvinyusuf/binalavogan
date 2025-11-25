<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('statistics_snapshots', function (Blueprint $table) {
            $table->id();
            $table->string('batch')->nullable();
            $table->string('province')->nullable();
            $table->string('sector')->nullable();
            $table->date('period_start')->nullable();
            $table->date('period_end')->nullable();

            $table->unsignedInteger('applicants')->default(0);
            $table->unsignedInteger('accepted')->default(0);
            $table->unsignedInteger('completed')->default(0);
            $table->unsignedInteger('placed')->default(0);

            $table->unsignedInteger('female')->default(0);
            $table->unsignedInteger('male')->default(0);
            $table->unsignedInteger('other_gender')->default(0);

            $table->unsignedInteger('hours_training')->default(0);
            $table->unsignedInteger('certified')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('statistics_snapshots');
    }
};


