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
        Schema::create('pessoa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cpf', 11)->unique();
            $table->string('phone', 15);
            $table->dateTime('birth', 15)->nullable();
            $table->string('objective', 255)->nullable();
            $table->string('company', 50)->nullable();
            $table->string('job', 50)->nullable();
            $table->string('function', 50)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('cep', 7)->nullable();
            $table->string('city', 50)->nullable();
           
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
        Schema::dropIfExists('cpf');
    }
};
