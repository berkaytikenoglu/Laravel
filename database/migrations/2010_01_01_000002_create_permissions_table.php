<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('category');
            $table->boolean('canshowadminpanel')->default(false);
            $table->boolean('canedituser')->default(false);
            $table->boolean('candeleteuser')->default(false);
            $table->boolean('canuploaduseravatar')->default(false);

            $table->boolean('canresponserequest')->default(false);
            $table->json('canresponserequestlist')->nullable()->default(null);

            $table->boolean('canaddfeedbackcategory')->default(false);
            $table->boolean('candeletefeedbackcategory')->default(false);
            $table->boolean('canreportrequest')->default(false);

            $table->boolean('caneditmyprofile')->default(false);
            $table->boolean('candeletemyprofile')->default(false);
            $table->boolean('canuploaduseravatarmyprofile')->default(false);

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
        Schema::dropIfExists('permissions');
    }
}
