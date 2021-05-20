<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('last_kana');
            $table->string('first_kana');
            $table->integer('gender');
            $table->dateTime('birthday');
            $table->string('post_code');
            $table->integer('pref_id');
            $table->string('address');
            $table->string('building');
            $table->string('tel');
            $table->string('mobile');
            $table->string('email');
            $table->text('remarks');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
        Schema::dropIfExists('customers');
    }
}
