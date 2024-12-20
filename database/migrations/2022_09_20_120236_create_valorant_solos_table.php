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
        Schema::create('valorant_solos', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->unique();

            $table->string("name");
            $table->string("phone_number", 20); 
            $table->string('line', 50);
            $table->string('id_riot', 20);
            $table->string('tag_riot', 20);
            $table->string('rank', 20);
            $table->string("institution", 100);
            $table->string("idcard");

            $table->string("payment");
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
        Schema::dropIfExists('valorant_solos');
    }
};
