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
         Schema::create('food', function (Blueprint $table) {
             $table->id_food()->unique();
             $table->string("nama_food");
             $table->string("harga");
             $table->string("deskripsi");
             $table->string("kategori");
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('food');
     }
 };