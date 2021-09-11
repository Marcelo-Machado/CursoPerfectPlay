<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursolaravelsTable extends Migration{

    public function up()
    {
        Schema::create('cursolaravels', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursolaravels');
    }
}
