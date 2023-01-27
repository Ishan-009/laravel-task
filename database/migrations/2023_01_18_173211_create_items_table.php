<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table ->string('name',60);
            $table ->string('email',100);
            $table ->string('password');
            $table ->string('confirm_password');
            $table ->string('country');
            $table ->string('state');
            $table ->text('address');
            $table ->enum('gender',['male','female','other']);
            $table ->date('dob');


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
        Schema::dropIfExists('items');
    }
}
