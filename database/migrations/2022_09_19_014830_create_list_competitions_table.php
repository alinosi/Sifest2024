<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_competitions', function (Blueprint $table) {
            $table->id();
            $table->string('competition');
            $table->integer('limit');
            $table->string('cp1');
            $table->string('cp1_line');
            $table->string('cp1_wa');
            $table->string('cp2')->nullable();
            $table->string('cp2_line')->nullable();
            $table->string('cp2_wa')->nullable();
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
        Schema::dropIfExists('list_competitions');
    }
};
