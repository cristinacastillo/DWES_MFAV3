<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {

            $table->increments('idUse');
            $table->string('name', 100);
            $table->string('surnames', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phoneNumber',9);

            // by default the user will be 0 = normal user
            $table->tinyInteger('profile')->default(0) ;

            // 
            $table->rememberToken();

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
        Schema::dropIfExists('user');
    }
}
