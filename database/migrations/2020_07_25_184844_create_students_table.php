<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Criando atributos ao objeto
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age')->nullable();
            $table->string('phone');
            $table->string('college')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->unsignedBigInteger('republic_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // Abaixo vai a chave estrangeira do nosso relacionamento

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('republic_id')->references('id')->on('republics')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
