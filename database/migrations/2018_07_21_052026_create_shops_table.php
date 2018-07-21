<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_category_id')->commet('店铺分类ID');
            $table->string('shop_name')->commet('名称');
            $table->string('shop_img')->commet('店铺图片');
            $table->float('shop_rating')->commet('评分');
            $table->boolean('brand')->commet('是否是品牌');
            $table->boolean('on_time')->commet('是否准时送达');
            $table->boolean('fengniao')->commet('是否蜂鸟配送');
            $table->boolean('bao')->commet('是否保标记');
            $table->boolean('piao')->commet('是否票标记');
            $table->boolean('zhun')->commet('是否准标记');
            $table->decimal('start_send')->commet('起送金额');
            $table->decimal('send_cost')->commet('配送费');
            $table->string('notice')->commet('店公告');
            $table->string('discount')->commet('优惠信息');
            $table->boolean('status')->commet('状态:1正常,0待审核,-1禁用');
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
        Schema::dropIfExists('shops');
    }
}
