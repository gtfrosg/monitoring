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
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
	    $table->foreignId('sala_id')->constrained('salas')->onDelete('cascade'); // Associa a mesa a uma sala
            $table->timestamps();
	    $table->integer('largura')->default(0);
	    $table->integer('profundidade')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesas');
    }
};
