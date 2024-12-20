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
        Schema::create('valorant_teams', function (Blueprint $table) {
            $table->id();

            $table->string('team_name', 50);
            $table->string('email', 100)->unique();

            $table->string("name1");
            $table->string("phone_number1", 20); 
            $table->string('line1', 50);
            $table->string('id_riot1', 20);
            $table->string('tag_riot1', 20);
            $table->string('rank1', 20);
            $table->string("institution1", 100);
            $table->string("idcard1");
            
            $table->string("name2");
            $table->string("phone_number2", 20); 
            $table->string('line2', 50);
            $table->string('id_riot2', 20);
            $table->string('tag_riot2', 20);
            $table->string('rank2', 20);
            $table->string("institution2", 100);
            $table->string("idcard2");
            
            $table->string("name3");
            $table->string("phone_number3", 20); 
            $table->string('line3', 50);
            $table->string('id_riot3', 20);
            $table->string('tag_riot3', 20);
            $table->string('rank3', 20);
            $table->string("institution3", 100);
            $table->string("idcard3");
            
            $table->string("name4");
            $table->string("phone_number4", 20); 
            $table->string('line4', 50);
            $table->string('id_riot4', 20);
            $table->string('tag_riot4', 20);
            $table->string('rank4', 20);
            $table->string("institution4", 100);
            $table->string("idcard4");
            
            $table->string("name5");
            $table->string("phone_number5", 20); 
            $table->string('line5', 50);
            $table->string('id_riot5', 20);
            $table->string('tag_riot5', 20);
            $table->string('rank5', 20);
            $table->string("institution5", 100);
            $table->string("idcard5");
            
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
        Schema::dropIfExists('valorant_teams');
    }
};
