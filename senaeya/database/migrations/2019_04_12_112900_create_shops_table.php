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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('number')->nullable();
            $table->string('url')->nullable();
            $table->string('mobile')->nullable();
            $table->string('services')->nullable();
            $table->string('car_models')->nullable();
            $table->string('categories')->nullable();
            $table->string('promotions')->nullable();
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
