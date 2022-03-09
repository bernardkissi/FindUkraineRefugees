<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_refugee', function (Blueprint $table) {
            $table->id();
            $table->uuid('identifier');
            $table->foreignId('refugee_id')->unsigned()->nullable()->index()->constrained('refugees');
            $table->string('name')->nullable();
            $table->string('number')->nullable();
            $table->foreignId('offers_id')->unsigned()->index()->constrained('offers');

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
        Schema::dropIfExists('offer_refugee');
    }
};
