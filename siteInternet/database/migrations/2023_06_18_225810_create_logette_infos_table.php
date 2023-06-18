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
        Schema::create('logette_infos', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('fonction');
            $table->string('email');
            $table->string('tel');
            $table->string('commune');
            $table->string('quartier');
            $table->string('rue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logette_infos');
    }
};
