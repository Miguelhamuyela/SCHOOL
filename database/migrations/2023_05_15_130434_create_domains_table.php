<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('accommodation');
            $table->string('email');
            $table->string('certificate');
            $table->string('startContract');
            $table->string('endContract');
            $table->longText('description');
            $table->unsignedBigInteger('fk_virtual_machines_id');
            $table->foreign('fk_virtual_machines_id')->references('id')->on('virtual_machines')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_customers_id');
            $table->foreign('fk_customers_id')->references('id')->on('customers')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('domains');
    }
}
