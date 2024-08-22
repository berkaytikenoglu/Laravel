<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appinfo', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();

            // Logo dosya adı (resim dosyasının adını tutabilirsiniz)
            $table->string('logo')->nullable();

            // Uygulamanın versiyonu
            $table->string('version')->nullable();

            // Uygulamanın kısa açıklaması
            $table->text('description')->nullable();

            // Aktif olup olmadığını belirten durum
            $table->boolean('is_active')->default(true);

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
        Schema::dropIfExists('appinfo');
    }
}
