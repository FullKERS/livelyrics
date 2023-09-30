<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTonacjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tonacjes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nazwaTonacji')->nullable();
            $table->string('stopien1');
            $table->string('stopien2');
            $table->string('stopien3');
            $table->string('stopien4');
            $table->string('stopien5');
            $table->string('stopien6');
            $table->string('stopien7');
            $table->string('transpozycjaGoraCdur')->nullable();
            $table->string('transpozycjaDolCdur')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tonacjes');
    }
}
