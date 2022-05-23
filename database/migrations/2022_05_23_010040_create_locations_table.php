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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('startDate');
            $table->dateTime('EndDate');
            $table->foreignId('client_id');
            $table->foreignId('user_id');
            $table->foreignId('locations_status_id');
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
        Schema::table('locations', function(Blueprint $table){
            $table->dropForeign(['client_id', 'user_id', 'locations_status_id']);
        });
        
        Schema::dropIfExists('locations');
    }
};
