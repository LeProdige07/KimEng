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
        Schema::create('logettes', function (Blueprint $table) {
            $table->id();
            $table->string('logette_name');
            $table->text('logette_description');
            $table->string('logette_image1');
            $table->string('logette_image2');
            $table->string('logette_image3');
            $table->string('logette_image4');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logettes');
    }
};
