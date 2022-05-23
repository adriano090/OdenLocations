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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->foreignId('rental_duration_id')->constrained();
            $table->foreignId('article_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pricings', function(Blueprint $table){
            $table->dropForeign(['rental_duration_id', 'article_id']);
        });
        Schema::dropIfExists('pricings');
    }
};
