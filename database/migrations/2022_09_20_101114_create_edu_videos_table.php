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
        Schema::create('edu_videos', function (Blueprint $table) {
            $table->id();

            $table->string('team_name', 50);
            $table->string('email', 100)->unique();

            $table->string("name1");
            $table->string("phone_number1", 20); 
            $table->string('line1', 50);
            $table->string("institution1", 100);
            $table->string("idcard1");
            
            $table->string("name2");
            $table->string("phone_number2", 20); 
            $table->string('line2', 50);
            $table->string("institution2", 100);
            $table->string("idcard2");

            $table->string("name3")->nullable();
            $table->string("phone_number3", 20)->nullable(); 
            $table->string('line3', 50)->nullable();
            $table->string("institution3", 100)->nullable();
            $table->string("idcard3")->nullable();
            
            $table->string("payment");
            $table->string("submission")->nullable();
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
        Schema::dropIfExists('edu_videos');
    }
};
