<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('batch_id')->unsigned()->index();
            $table->string('title');
            $table->string('note');
            $table->string('covering_date');
            $table->string('arrangement');
            $table->boolean('document_is_open');
            $table->boolean('description_is_open');
            $table->string('closure_status_description');
            $table->string('legal_status');
            $table->string('physical_description');
            $table->string('access_conditions');
            $table->string('foi_decision_date');
            $table->string('exemption');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
