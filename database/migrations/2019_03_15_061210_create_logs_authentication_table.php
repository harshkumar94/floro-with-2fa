<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsAuthenticationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_authentication', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->time('login_time');
            $table->time('logout_time');
            $table->string('ip_address');
            $table->string('browser_agent');
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
        Schema::dropIfExists('logs_authentication');
    }
}
