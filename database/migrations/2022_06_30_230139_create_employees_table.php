<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('fname');
            $table->string('sname');
            $table->string('oname')->nullable();
            $table->string('ssn')->nullable();
            $table->string('salary')->nullable();
            $table->string('contact')->nullable();
            $table->string('ssf')->nullable();
            $table->string('2tier_ssf')->nullable();
            $table->string('photo')->default('noimage.png');
            $table->string('status')->default('Active');
            $table->string('del')->default('no');
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
        Schema::dropIfExists('employees');
    }
}
