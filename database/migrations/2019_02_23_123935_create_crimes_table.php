<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crimes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service');
            $table->string('employee_fio', '100');
            $table->string('employee_phone', '15');
            // место задержания (проверки)
            $table->string('place_detention', '256');
            $table->string('region', '256');
            $table->string('fabula', '256');
            // доставлен-проверен на месте
            $table->string('action', '100');
            $table->date('date_arrest');
            $table->string('registry_number', '12');
            $table->string('method_crime', '256');
            $table->string('number_ud' ,'17');
            $table->string('number_kusp', '17');
            $table->date('date_register');
            // дата возбуждения УД
            $table->date('date_criminal_proceedings');
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
        Schema::dropIfExists('crimes');
    }
}
