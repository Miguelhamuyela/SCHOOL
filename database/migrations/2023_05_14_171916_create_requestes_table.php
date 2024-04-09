<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('memory');
            $table->longText('focalPoint');
            $table->string('tel');
            $table->string('systemName');
            $table->string('email');
            $table->longText('obs');
            $table->softDeletes();
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
        Schema::dropIfExists('requestes');
    }
}
