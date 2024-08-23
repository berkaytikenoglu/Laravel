<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks_requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user')->constrained()->onDelete('cascade');
            $table->foreignId('feedbacks_category')->nullable()->default('1')->constrained()->onDelete('set null');
            $table->foreignId('status')->nullable()->default('1')->constrained()->onDelete('set null');
            $table->text('subject')->nullable();
            $table->text('description')->nullable();
            $table->string('response_status')->nullable();
            $table->datetime('date')->nullable();
            $table->json('documents')->nullable(); // JSON formatında belgeler
            $table->foreignId('address_id')->nullable()->constrained()->onDelete('set null');
            $table->text('address_description')->nullable();
            $table->text('address_insidedoor')->nullable();
            $table->text('address_outdoor')->nullable();
            $table->text('address_street')->nullable();
            $table->text('address_neighbourhood')->nullable();
            $table->text('address_city')->nullable();
            $table->text('address_province')->nullable();
            $table->text('address_country')->nullable();
            $table->text('address_postal_code')->nullable();
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
        Schema::dropIfExists('feedbacks_requests');
    }
}
