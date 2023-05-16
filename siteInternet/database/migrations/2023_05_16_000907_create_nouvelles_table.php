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
        Schema::create('nouvelles', function (Blueprint $table) {
            $table->id();
            $table->string('nouvelle_titre');
            $table->text('sujet');
            $table->string('nouvelle_image');
            $table->text('nouvelle_contenu');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nouvelles');
    }
};
