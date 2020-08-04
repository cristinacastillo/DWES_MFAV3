<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption', function (Blueprint $table) 
        {
            $table->increments('idAdop');
            $table->unsignedInteger('idDog') ;
            $table->unsignedInteger('idUse') ;
            $table->text('reason') ;
            $table->date('dateAdop') ;

            // by default the status will be 0 = pending acceptance
            // 1 = adopted
            // 2 = denied
            $table->boolean('status')->default(0);

            
        });

        Schema::table('adoption', function(Blueprint $table)
        {
            $table->foreign('idDog')
                  ->references('idDog')
                  ->on('dog')
                  ->onDelete('cascade') ;
        }) ;

        Schema::table('adoption', function(Blueprint $table)
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
        Schema::dropIfExists('adoption');
    }
}
