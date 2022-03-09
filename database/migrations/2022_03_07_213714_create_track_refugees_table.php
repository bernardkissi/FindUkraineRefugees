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
        Schema::create('track_refugees', function (Blueprint $table) {
            $table->id();
            $table->uuid('identifier');
            $table->string('email')->nullable();
            $table->string('number');

            $table->string('refugee_name')->nullable();
            $table->string('refugee_number')->nullable();

            $table->string('notified');
            $table->dateTime('notifiedAt')->nullable();

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
        Schema::dropIfExists('track_refugees');
    }
};
