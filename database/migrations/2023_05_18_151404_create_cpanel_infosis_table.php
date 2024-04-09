<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpanelInfosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpanel_infosis', function (Blueprint $table) {
            $table->id();
            $table->string('subdomain');
            $table->string('username');
            $table->string('packages');
            $table->string('entity');
            $table->string('share');
            $table->longText('bandwidth');
            $table->string('account');
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
        Schema::dropIfExists('cpanel_infosis');
    }
}
