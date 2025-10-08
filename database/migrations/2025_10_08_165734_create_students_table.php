<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name', 120);         
            $table->string('nim', 40)->unique();
            $table->string('program_studi', 120)->nullable();
            $table->year('angkatan')->nullable();
            $table->timestamps();

            $table->index(['program_studi', 'angkatan']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('students');
    }
};
