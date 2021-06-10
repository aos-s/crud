<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prefs', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('name')->comment('都道府県名');
            $table->timestamp('cretad_at')->useCurrent()->comment('作成日時');
            $table->timestamp('updated_at')->useCurrent()->comment('更新日時');
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->bigInteger('id')->comment('ID');
            $table->string('last_name')->comment('姓');
            $table->string('first_name')->comment('名');
            $table->string('last_kana')->comment('姓かな');
            $table->string('first_kana')->comment('名かな');
            $table->integer('gender')->comment('性別');
            $table->dateTime('birthday')->comment('生年月日');
            $table->string('post_code')->comment('郵便番号');
            $table->integer('pref_id')->comment('都道府県ID');
            $table->string('address')->comment('住所');
            $table->string('building')->comment('建物名');
            $table->string('tel')->comment('電話番号');
            $table->string('mobile')->comment('携帯番号');
            $table->string('email')->comment('メールアドレス');
            $table->text('remarks')->comment('備考');
            $table->timestamp('created_at')->useCurrent()->comment('作成日時');
            $table->timestamp('updated_at')->useCurrent()->comment('更新日時');
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
        Schema::dropIfExists('prefs');
        Schema::dropIfExists('customers');
    }
}
