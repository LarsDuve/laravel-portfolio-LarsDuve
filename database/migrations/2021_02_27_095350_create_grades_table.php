<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('course_id')
                ->nullable()
                ->references('id')
                ->on('grades')
                ->onDelete('cascade');
            $table->string('test_name');
            $table->decimal('lowest_passing_grade', $precision = 3, $scale = 1)->default(5.5)->comment('Lowest grade to pass so average calculations can be applied');
            $table->decimal('best_grade', $precision = 3, $scale = 1)->nullable();
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
        Schema::dropIfExists('grades');
    }
}
