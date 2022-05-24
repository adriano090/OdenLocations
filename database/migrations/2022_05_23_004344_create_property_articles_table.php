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
        Schema::create('property_articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('isObligatory')->default(1);
            $table->foreignId('type_article_id')->constrained();
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
        Schema::table('property_articles', function(Blueprint $table){
            $table->dropForeign('type_article_id');
        });
        Schema::dropIfExists('property_articles');
    }
};
