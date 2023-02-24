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
        Schema::create('fir_reports', function (Blueprint $table) {
            $table->id();
            $table->string('dist')->nullable();
            $table->string('ps')->nullable();
            $table->string('year')->nullable();
            $table->string('fir_no')->nullable();
            $table->string('date')->nullable();
            $table->string('occurrence_offense')->nullable();
            $table->string('information_recieved_at_ps')->nullable();
            $table->string('ganeral_diary_reference_entry_no')->nullable();
            $table->string('ganeral_diary_reference_time')->nullable();
            $table->string('type_of_information')->nullable();
            $table->string('direction_distance_from_ps')->nullable();
            $table->string('beat_no')->nullable();
            $table->string('address')->nullable();
            $table->string('outside_of_limit_ps_name')->nullable();
            $table->string('district')->nullable();
            $table->string('name')->nullable();
            $table->string('father_or_husband_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('person_address')->nullable();
            $table->string('value_of_properties_stolen')->nullable();
            $table->string('investigation')->nullable();
            $table->string('rank')->nullable();
            $table->string('transfer_to_ps')->nullable();
            $table->string('officer_name')->nullable();
            $table->string('officer_rank')->nullable();
            $table->string('officer_no')->nullable();
            $table->string('officer_signature')->nullable();
            $table->string('officer_date')->nullable();
            $table->longText('fir_contents')->nullable();
            $table->longText('inquest_report')->nullable();
            $table->longText('particulars_of_properties_stolen')->nullable();
            $table->longText('reason_for_delay_report')->nullable();
            $table->longText('detail_of_suspected')->nullable();
            $table->longText('act_section')->nullable();



            // new columns
            $table->enum('are_you_18', ['yes', 'no'])->default('yes');
            $table->string('detail_of_known_file')->nullable();
            $table->string('properties_stole_file')->nullable();
            $table->string('evidance_file')->nullable();

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
        Schema::dropIfExists('fir_reports');
    }
};
