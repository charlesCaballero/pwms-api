<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentRetentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_retentions', function (Blueprint $table) {
            $table->id();
            $table->string('rds_no',6);
            $table->string('rds_item_no',3);
            $table->string('series_title_description');
            $table->string('retention_period',2);
            $table->string('dept_unit');
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
        Schema::dropIfExists('document_retentions');
    }
}
