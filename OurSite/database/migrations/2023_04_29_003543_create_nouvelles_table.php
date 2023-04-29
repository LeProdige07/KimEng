<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNouvellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nouvelles');
    }
}
