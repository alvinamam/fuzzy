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
        Schema::create('sedangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('data_id')->nullable();
            $table->decimal('ketidakteraturan')->nullable();
            $table->decimal('luaskawasan')->nullable();
            $table->decimal('persyaratanteknis')->nullable();
            $table->decimal('keterjangkauan')->nullable();
            $table->decimal('kualitaspermukaan')->nullable();
            $table->decimal('ketersediaanaksesair')->nullable();
            $table->decimal('tidakterpenuhinyaair')->nullable();
            $table->decimal('ketidakmampuan')->nullable();
            $table->decimal('ketidaktersediaandrainase')->nullable();
            $table->decimal('kualitaskonstruksi')->nullable();
            $table->decimal('sistempengolahanair')->nullable();
            $table->decimal('sapraspengolahanair')->nullable();
            $table->decimal('sapraspersampahan')->nullable();
            $table->decimal('sistempengelolaan')->nullable();
            $table->decimal('ketidaktersediaanprasarana')->nullable();
            $table->decimal('ketidaktersediaansarana')->nullable();
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
        Schema::dropIfExists('sedangs');
    }
};
