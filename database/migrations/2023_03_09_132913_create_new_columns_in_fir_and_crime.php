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
        Schema::table('fir_reports', function (Blueprint $table) {
            $table->string('lat')->default('26.66286822930185');
            $table->string('lng')->default('87.27435207380042');
        });
        Schema::table('crimereports', function (Blueprint $table) {
            $table->string('lat')->default('26.66286822930185');
            $table->string('lng')->default('87.27435207380042');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crimereports', function (Blueprint $table) {
            $table->dropColumn('lat');
            $table->dropColumn('lng');
        });
        Schema::table('fir_reports', function (Blueprint $table) {
            $table->dropColumn('lat');
            $table->dropColumn('lng');
        });
    }
};
