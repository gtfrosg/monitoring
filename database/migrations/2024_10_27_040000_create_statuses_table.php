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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
    	    $table->foreignId('equipamento_id')->constrained('equipamentos')->onDelete('cascade'); // Associa um status a um equipamento
            $table->string('hostname')->nullable();
            $table->string('ip')->nullable();
            $table->string('username')->nullable();
            $table->timestamp('login_at')->nullable();
	    $table->string('keyboard')->nullable();
	    $table->string('mouse')->nullable();
	    $table->string('monitor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
