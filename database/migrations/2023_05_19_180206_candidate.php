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
         Schema::create('candidates',function (Blueprint $table){
              $table->id();
              $table->string('full_name');
              $table->string('email')->unique();
              $table->integer('number');
              $table->string('cv');
              $table->longText('letter');
              $table->foreignId('offer_id')->constrained();
 
         });
     }
 
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('candidates');
     }
};
