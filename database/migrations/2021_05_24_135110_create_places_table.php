<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->boolean('P1');
            $table->boolean('P2');
            $table->boolean('P3');
            $table->boolean('P4');
            $table->boolean('P5');
            $table->boolean('P6');
            $table->boolean('P7');
            $table->boolean('P8');
            $table->boolean('P9');
            $table->boolean('P10');
            $table->boolean('P11');
            $table->boolean('P12');
            $table->boolean('P13');
            $table->boolean('P14');
            $table->boolean('P15');
            $table->boolean('P16');
            $table->boolean('P17');
            $table->boolean('P18');
            $table->boolean('P19');
            $table->boolean('P20');
            $table->boolean('P21');
            $table->boolean('P22');
            $table->boolean('P23');
            $table->boolean('P24');
            $table->boolean('P25');
            $table->boolean('P26');
            $table->boolean('P27');
            $table->boolean('P28');
            $table->boolean('P29');
            $table->boolean('P30');
            $table->boolean('P31');
            $table->boolean('P32');
            $table->boolean('P33');
            $table->boolean('P34');
            $table->boolean('P35');
            $table->boolean('P36');
            $table->boolean('P37');
            $table->boolean('P38');
            $table->boolean('P39');
            $table->boolean('P40');
            $table->boolean('P41');
            $table->boolean('P42');
            $table->boolean('P43');
            $table->boolean('P44');
            $table->boolean('P45');
            $table->boolean('P46');
            $table->boolean('P47');
            $table->boolean('P48');
            $table->boolean('P49');
            $table->boolean('P50');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
