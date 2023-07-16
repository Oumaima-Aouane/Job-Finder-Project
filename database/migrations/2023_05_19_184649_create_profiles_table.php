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
         Schema::create('profiles', function (Blueprint $table) {
             $table->id();
             $table->string('full_name');
             $table->integer('number');
             $table->string('email')->unique();
             $table->string('password');
 
         });
     }
 
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Shema::dropIfExists('profiles');
     }
};
