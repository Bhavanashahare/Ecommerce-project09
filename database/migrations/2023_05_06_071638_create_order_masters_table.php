<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_masters', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('fname');
            $table->string('lname');
            $table->string('companyname');
            $table->string('address');
            $table->string('state');
            $table->string('zip_code');
            $table->string('email');
            $table->string('phone');
            $table->string('comments');

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
        Schema::dropIfExists('order_masters');
    }
};
