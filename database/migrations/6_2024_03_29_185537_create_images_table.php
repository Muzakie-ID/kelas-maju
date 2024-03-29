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
        Schema::create('images', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("url");
            $table->uuid("user_id")->nullable();
            $table->uuid("teacher_id")->nullable();
            $table->uuid("student_id")->nullable();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("teacher_id")->references("id")->on("teachers");
            $table->foreign("student_id")->references("id")->on("students");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
