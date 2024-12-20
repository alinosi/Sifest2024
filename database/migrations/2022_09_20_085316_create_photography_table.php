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
        Schema::create('photographies', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('email', 100)->unique();
            $table->string('phone_number', 20);
            $table->string('line', 50);
            $table->string('institution', 100);
            $table->string('idcard');

            $table->string('payment');
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
        Schema::dropIfExists('photographies');
    }
};
