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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigInteger('id_c')->primary();
            $table->string('name');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email');
            $table->string('contcuello');
            $table->string('contbusto');
            $table->string('contcintura');
            $table->string('contcadera');
            $table->string('contestraple');
            $table->string('contimperio');
            $table->string('ltdelantero');
            $table->string('ltposterior');
            $table->string('lcostado');
            $table->string('aespalda');
            $table->string('apecho');
            $table->string('ahombro');
            $table->string('dbusto');
            $table->string('adbusto');
            $table->string('adimperio');
            $table->string('adcadera');
            $table->string('chdelantero');
            $table->string('chespalda');
            $table->string('evdelantero');
            $table->string('ehdelantero');
            $table->string('evespalda');
            $table->string('ehespalda');
            $table->string('larodilla');
            $table->string('lfcorta');
            $table->string('lflarga');
            $table->string('lvestido');
            $table->string('bocamanga');
            $table->string('adcopa');
            $table->string('ldbrazo');
            $table->string('lacodo');
            $table->string('cdpuno');
            $table->string('ltiro');
            $table->string('arodilla');
            $table->string('abota');
            $table->string('crodilla');
            $table->string('cbota');



            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('clients');
    }
};
