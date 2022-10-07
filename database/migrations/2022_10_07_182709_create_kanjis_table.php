<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKanjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanji', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->text('image_url')->nullable();
            $table->text('sino_vn_reading')->nullable();
            $table->text('meaning');
            $table->unsignedBigInteger('type_kanji_id');
            $table->text('on_pronun');
            $table->text('kun_pronun');
            $table->text('description')->nullable();
//            $table->longText('accompanying_vocabulary');
            $table->text('writing_style_url')->nullable();
//            $table->longText
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('type_kanji_id')->references('id')->on('type_kanji');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kanji');
    }
}
