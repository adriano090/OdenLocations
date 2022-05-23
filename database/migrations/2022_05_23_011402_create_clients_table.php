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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->char('sexe');
            $table->date('dateOfBirth');
            $table->string('placeOfBirth');
            $table->string('nationality');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('identityDocument');
            $table->string('numberIdentityDocument');
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
        Schema::dropIfExists('clients');
    }
};
