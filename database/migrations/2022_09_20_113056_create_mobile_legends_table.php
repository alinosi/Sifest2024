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
        Schema::create('mobile_legends', function (Blueprint $table) {
            $table->id();

            $table->string('team_name', 50);
            $table->string('email', 100)->unique();
            


            $table->string("name1");
            $table->string("phone_number1", 20); 
            $table->string('line1', 50);
            $table->string('id_mole1', 20);
            $table->string('server_mole1', 20);
            $table->string("institution1", 100);
            $table->string("idcard1");
            
            $table->string("name2");
            $table->string("phone_number2", 20); 
            $table->string('line2', 50);
            $table->string('id_mole2', 20);
            $table->string('server_mole2', 20);
            $table->string("institution2", 100);
            $table->string("idcard2");
            
            $table->string("name3");
            $table->string("phone_number3", 20); 
            $table->string('line3', 50);
            $table->string('id_mole3', 20);
            $table->string('server_mole3', 20);
            $table->string("institution3", 100);
            $table->string("idcard3");
            
            $table->string("name4");
            $table->string("phone_number4", 20); 
            $table->string('line4', 50);
            $table->string('id_mole4', 20);
            $table->string('server_mole4', 20);
            $table->string("institution4", 100);
            $table->string("idcard4");
            
            $table->string("name5");
            $table->string("phone_number5", 20); 
            $table->string('line5', 50);
            $table->string('id_mole5', 20);
            $table->string('server_mole5', 20);
            $table->string("institution5", 100);
            $table->string("idcard5");

            $table->string("name6")->nullable();
            $table->string("phone_number6", 20)->nullable(); 
            $table->string('line6', 50)->nullable();
            $table->string('id_mole6', 20)->nullable();
            $table->string('server_mole6', 20)->nullable();
            $table->string("institution6", 100)->nullable();
            $table->string("idcard6")->nullable();

            $table->string("name7")->nullable();
            $table->string("phone_number7", 20)->nullable();
            $table->string('line7', 50)->nullable();
            $table->string('id_mole7', 20)->nullable();
            $table->string('server_mole7', 20)->nullable();
            $table->string("institution7", 100)->nullable();
            $table->string("idcard7")->nullable();
            
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
        Schema::dropIfExists('mobile_legends');
    }
};
