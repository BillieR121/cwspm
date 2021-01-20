<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsimajorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csimajor', function (Blueprint $table) {
            $table->bigIncrements('id', 2);
            $table->double('division', 2, 0)->index();
            $table->string('code', 15)->unique();
            $table->string('description', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csimajor');
    }
}
