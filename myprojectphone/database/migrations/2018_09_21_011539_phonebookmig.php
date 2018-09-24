<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Phonebookmig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

         Schema::create('PhoneBook', function (Blueprint $table) {
            $table->increments('Pid');
            $table->string('image')->default('ash.jpg')->nullable();
            $table->String('Nickname', 255);
            $table->String('FName', 255);
            $table->String('LName', 255);
            $table->String('Contact', 255);
            $table->String('Address', 255);
            
            
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
        //
    }
}
