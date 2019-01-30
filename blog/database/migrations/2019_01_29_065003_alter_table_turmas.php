<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableTurmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('turmas' , function (Blueprint $table) {

            $table->string('disciplina',150);
            //FK
            $table->integer('alunos_id')->unsigned()->index();
            $table->foreign('alunos_id')->references('id')->on('alunos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
