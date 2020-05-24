<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog', function (Blueprint $table) {
            $table->increments('idDog');
            $table->date('birthdate');
            $table->string('name', 50);
            $table->string('breed', 80);
            $table->string('gender', 15);
            $table->text('description');
            $table->string('photo',255);

            // by default the status will be 0 = not adopted
            $table->boolean('status')->default(0);

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
        Schema::dropIfExists('dog');
    }
}
