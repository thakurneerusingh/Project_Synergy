<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodieselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodiesels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('mobile');
            $table->string('customer_type');
            $table->string('volume');
            $table->string('Use_in');
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
        Schema::dropIfExists('biodiesels');
    }
}
