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
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->string('RT');
            $table->integer('ketidakteraturan');
            $table->integer('luaskawasan');
            $table->integer('persyaratanteknis');
            $table->integer('keterjangkauan');
            $table->integer('kualitaspermukaan');
            $table->integer('ketersediaanaksesair');
            $table->integer('tidakterpenuhinyaair');
            $table->integer('ketidakmampuan');
            $table->integer('ketidaktersediaandrainase');
            $table->integer('kualitaskonstruksi');
            $table->integer('sistempengolahanair');
            $table->integer('sapraspengolahanair');
            $table->integer('sapraspersampahan');
            $table->integer('sistempengelolaan');
            $table->integer('ketidaktersediaanprasarana');
            $table->integer('ketidaktersediaansarana');
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
        Schema::dropIfExists('datas');
    }
};
