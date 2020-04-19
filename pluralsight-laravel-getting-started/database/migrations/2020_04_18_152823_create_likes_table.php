<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('likes',function(Blueprint $table){

            // this will be part of the 
            // foreign key
            $table->increments('id');
            $table->timestamps();

            // this is used as default assumption of 
            // laravel
            $table->integer('post_id');

        });
    }


    public function down(){
        Schema::drop('likes');
    }
}
