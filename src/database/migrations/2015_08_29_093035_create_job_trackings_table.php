<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTrackingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('job_trackings', function (Blueprint $table) {

            $table->string('job_id')->unique();
            $table->integer('owner_id')->default(0);
            $table->string('api');
            $table->string('scope');
            $table->string('output')->default(null)->nullable();
            $table->enum('status', ['Queued', 'Working', 'Done', 'Error']);

            // Indexes
            $table->primary('job_id');
            $table->index('owner_id');
            $table->index('status');

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

        Schema::drop('job_trackings');
    }
}