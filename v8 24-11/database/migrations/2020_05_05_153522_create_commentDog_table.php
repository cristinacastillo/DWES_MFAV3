<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentDogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentDog', function (Blueprint $table) {
            $table->increments('idCom') ;
            $table->text('comment') ;
            $table->date('dateComment') ;
            $table->unsignedInteger('idDog') ;
            $table->unsignedInteger('idUse') ;
            
            $table->rememberToken();
            $table->timestamps();
        });




        Schema::table('commentDog', function(Blueprint $table)
        {
            $table->foreign('idDog')
                  ->references('idDog')
                  ->on('dog')
                  ->onDelete('cascade') ;
        }) ;

        Schema::table('commentDog', function(Blueprint $table)
        {
            $table->foreign('idUse')
                  ->references('idUse')
                  ->on('user')
                  ->onDelete('cascade') ;
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentDog');
    }
}
