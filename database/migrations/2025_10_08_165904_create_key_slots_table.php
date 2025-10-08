<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('key_slots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('rooms')->restrictOnDelete()->cascadeOnUpdate();
            $table->string('slot_code', 32);          
            $table->string('label', 80)->nullable();  
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->unique(['room_id', 'slot_code']); 
        });
    }

    public function down(): void {
        Schema::dropIfExists('key_slots');
    }
};
