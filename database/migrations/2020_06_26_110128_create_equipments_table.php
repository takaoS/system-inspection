<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('facility_id');
            $table->foreign('facility_id')->references('id')->on('facilities');
            $table->string('name');       // 施設名（ブランコ、ベンチなど）
            $table->string('img');        // 全体写真の画像パス
            $table->string('evaluation'); // 総合評価
            $table->string('comment');    // 全体コメント
            $table->string('hight')->nullable(); // 落下高さ ベンチなどの場合はnull
            $table->string('eval_a_num'); // 評価 Aの数
            $table->string('eval_b_num'); // 評価 Bの数
            $table->string('eval_c_num'); // 評価 Cの数
            $table->string('eval_d_num'); // 評価 Dの数 全体数量は、これら4つを足したもの
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
        Schema::dropIfExists('equipments');
    }
}
