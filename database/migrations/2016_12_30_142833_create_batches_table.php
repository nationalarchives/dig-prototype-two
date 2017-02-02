<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('received')->nullable();
            $table->string('path_to_schema_file')->nullable();
            $table->string('path_to_metadata_file')->nullable();
            $table->string('path_to_transfer_file')->nullable();
            $table->string('name');
            $table->string('series_id');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batches');
    }
}
