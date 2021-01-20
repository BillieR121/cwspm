<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company',150);
            $table->string('first',50);
            $table->string('last',50);
            $table->string('address', 100);
            $table->string('city', 50);
            $table->string('state', 30);
            $table->string('zip', 15);
            $table->string('workphone', 21);
            $table->string('cellphone', 21)->nullable();
            $table->string('email', 150)->unique();
            $table->string('role', 25);
            $table->string('csi1', 15);
            $table->string('csi2', 15)->nullable();
            $table->string('csi3', 15)->nullable();
            $table->string('csi4', 15)->nullable();
            $table->string('csi5', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
