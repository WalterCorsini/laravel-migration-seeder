<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table){
            //  campi da inserire
            $table->unsignedBigInteger('train_code')->unique; // treni hanno codice da 12 cifre numeriche
            $table->string('name');  // possono avere lo stesso nome (freccarossa,frecciargento.... ma no lo stesso train_code che gli distingue)
            $table->unsignedTinyInteger('number of carriages')->nullable();
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->boolean('in_time')->nullable();
            $table->boolean('in_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //  per il rollback dell'ultima migrazione
        Schema::dropIfExists('trains');
    }
};
