<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposalRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposal_requests', function (Blueprint $table) {
            $table->id();
            $table->string('form_no')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('office_id');
            $table->unsignedBigInteger('inventory_id');
            $table->date('date_disposed')->nullable();
            $table->string('status', 50);
            $table->string('remarks');
            $table->foreign('office_id')->references('id')->on('offices');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('inventory_id')->references('id')->on('inventory');
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
        Schema::dropIfExists('disposal_requests');
    }
}
