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
    public function up()//up() for create table/column
    {
        //schema::facade for table creation takin two paramenters
        Schema::create('students', function (Blueprint $table) {
            $table->id();//it auto increments
            $table->string('name');
            $table->string('email');
            $table->timestamps(); //it create two columns create_at , update_at , we dont have to write 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//down() for drop table/column in case of roll back
    {
        Schema::dropIfExists('students');
    }
};
