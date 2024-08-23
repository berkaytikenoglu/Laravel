<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->string('icon');
            $table->text('description')->nullable();
            $table->timestamps();

            // InnoDB motorunu belirtmek için:
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedbacks_categories');
    }
}
