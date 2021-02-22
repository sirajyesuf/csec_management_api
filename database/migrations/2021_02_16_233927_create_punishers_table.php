<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePunishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punishers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("puser_id");
            $table->unsignedBigInteger("cuser_id");
            $table->foreign('puser_id')->references('id')->on('users');
            $table->foreign('cuser_id')->references('id')->on('users');
            $table->string('reason');
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
        Schema::dropIfExists('punishers');
    }
}
