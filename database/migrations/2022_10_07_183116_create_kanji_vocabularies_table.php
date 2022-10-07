<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKanjiVocabulariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanji_vocabulary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kanji_id');
            $table->unsignedBigInteger('vocabulary_id');
            $table->timestamps();

            $table->foreign('kanji_id')->references('id')->on('kanji');
            $table->foreign('vocabulary_id')->references('id')->on('vocabularies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kanji_vocabularies');
    }
}
