<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained('feedbacks_categories')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('statuses')->onDelete('set null'); // Status için yabancı anahtar
            $table->text('description');
            $table->string('response_status')->nullable();
            $table->date('date');
            $table->json('documents')->nullable(); // JSON formatında belgeler
            $table->foreignId('address_id')->constrained()->onDelete('set null');
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
        Schema::dropIfExists('requests');
    }
}
