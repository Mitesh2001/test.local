<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('classes_id');
            $table->string('topic');
            $table->text('description');
            $table->date('submission_date');
            $table->string('submission_time');
            $table->bigInteger('max_marks');
            $table->string('file');
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
        Schema::dropIfExists('assignements');
    }
}
