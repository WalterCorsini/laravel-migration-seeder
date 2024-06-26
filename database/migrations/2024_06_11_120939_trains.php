<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *  CREATE TABLE 'trains' (
     *      'id'                    UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT
     *      'code_train'            UNSIGNED BIGINT NOT NULL,
     *      'name'                  VARCHAR(255) NOT NULL,
     *      'number_of_carriages'   UNSIGNED TINYINT NULL,
     *      'departure_station'     VARCHAR(255) NOT NULL,
     *      'arrival_station'       VARCHAR(255) NOT NULL,
     *      'departure_time         DATETIME,
     *      'arrival_time'          DATETIME,
     *      'in_time'               UNSIGNED TINIYNT NOT NULL DEFAULT(1)
     *      'delete'                UNSIGNED TINIYNT NOT NULL DEFAULT(0)
     *       PRIMARY KEY ('id')
     *  )
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table){
            //  campi da inserire
            $table->id();
            $table->unsignedBigInteger('train_code');  // il treno puo fare piu viaggi e piu tratte.
            $table->string('name');  // possono avere lo stesso nome (freccarossa,frecciargento.... ma no lo stesso train_code che gli distingue)
            $table->unsignedTinyInteger('number_of_carriages')->nullable();
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->boolean('in_time')->default(true);
            $table->boolean('delete')->default(false);
            $table->timestamps();
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
