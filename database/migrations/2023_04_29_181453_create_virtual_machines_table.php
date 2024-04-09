<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_machines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ip');
            $table->string('so');
            $table->string('diskSpace');
            $table->string('memory');
            $table->string('cpu');
            $table->string('autoRestart');
            $table->string('storage');
            $table->string('clienttype');
            $table->string('status');
            $table->string('certificate');
            $table->string('startContract');
            $table->string('endContract');
            $table->unsignedBigInteger('fk_physical_machines_id');
            $table->foreign('fk_physical_machines_id')->references('id')->on('physical_machines')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_hacks_id');
            $table->foreign('fk_hacks_id')->references('id')->on('hacks')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('virtual_machines');
    }
}
