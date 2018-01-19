<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            /*$table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');*/
            $table->string('name');
            $table->string('lead_name');
            $table->string('address');
            $table->bigInteger('telephone');
            $table->string('email');
            $table->timestamp('arrival')->useCurrent();
            $table->timestamp('departure')->useCurrent();
            $table->integer('children');
            $table->integer('adult');
            $table->string('car_registration');
            $table->string('note');
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
        Schema::dropIfExists('guests');
    }
}
