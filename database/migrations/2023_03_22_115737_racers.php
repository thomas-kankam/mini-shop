<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Racers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('racers', function (Blueprint $table) {
            $table->id();
            $table->String('msisdn');
            $table->String('fullname');
            $table->String('age');
            $table->String('region')->default("N/A");
            $table->String('nationality');
            $table->String('category');
            $table->String('gender');
            $table->String('status');
            $table->String('network');
            $table->String('racerid');
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
