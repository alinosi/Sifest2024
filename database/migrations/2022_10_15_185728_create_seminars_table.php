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
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email', 100)->unique();
            $table->string('phone_number', 20);
            $table->string('line', 50)->nullable();
            $table->string('type', 20);
            $table->string('metode', 20);

            $table->string('payment')->nullable();
            $table->string("verification")->nullable();

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
        Schema::dropIfExists('seminars');
    }
};
