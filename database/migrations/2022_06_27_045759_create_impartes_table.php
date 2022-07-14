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
        Schema::create('impartes', function (Blueprint $table) {

            $table->string('codclase',5);
            $table->bigInteger('id_aula')->unsigned();
            $table->string('id_profesor',10);
            $table->foreign('codclase')->references('codclase')->on('clases')->onDelete('cascade');
            $table->foreign('id_aula')->references('id')->on('aulas')->onDelete('cascade');
            $table->foreign('id_profesor')->references('id')->on('profesors')->onDelete('cascade');
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
        Schema::dropIfExists('impartes');
    }
};
