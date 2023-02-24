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
        Schema::create('crimereports', function (Blueprint $table) {
            $table->id();
            $table->string('incidentype')->nullable();
            $table->string('eightenornot')->nullable();
            $table->string('forpforb')->nullable();
            $table->string('fullname')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('drivinglicno')->nullable();
            $table->string('incidentaddress')->nullable();
            $table->string('incidenttime')->nullable();
            $table->string('incidentimage')->nullable();
            $table->longText('incidentdescription')->nullable();


            $table->enum('status', ['pending', 'processing', 'completed'])->default('pending');
            $table->unsignedBigInteger('uploder_id')->nullable();
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
        Schema::dropIfExists('crimereports');
    }
};
