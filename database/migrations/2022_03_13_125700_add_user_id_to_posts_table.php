<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
             //this is foreign key

             $table->unsignedBigInteger('user_id')->nullable();
            //  $table->foreign('user_id')->references('id')->on('users');





        });
    }

 
}
