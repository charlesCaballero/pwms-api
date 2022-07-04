<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('company_id_number')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('permissions',4)->nullabe();
            $table->boolean('status')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->json('modules')->nullable();
            $table->unsignedBigInteger('office_id');
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('office_id')->references('id')->on('offices');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->binary('photo')->nullable();
            $table->rememberToken();
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
        Schema::create('users', function (Blueprint $table) {
            $table->dropForeign('role_id');
        });
        Schema::dropIfExists('users');
    }
};
