<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePixelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pixels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('sangat_buruk');
            $table->string('buruk');
            $table->string('biasa');
            $table->string('baik');
            $table->string('sangat_baik');
            $table->string('emosi');
            $table->string('faktor');
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
        Schema::dropIfExists('pixels');
    }
}
