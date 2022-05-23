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
        Schema::create('article_property', function (Blueprint $table) {
            $table->foreignId('article_id');
            $table->foreignId('property_article_id');
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
        Schema::table('article_property', function(Blueprint $table){
            $table->dropForeign(['article_id', 'property_article_id']);
        });
        Schema::dropIfExists('article_property');
    }
};
