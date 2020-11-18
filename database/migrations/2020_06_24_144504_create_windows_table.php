<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWindowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('windows', function (Blueprint $table) {
            $table->id();
            $table->string("window");
            $table->string("small")->nullable();
            $table->string("pane")->nullable();
            $table->string("info")->nullable();
            $table->string("gift")->nullable();
            $table->string("name");
            $table->string("phone");
            $table->string("email");
            $table->string("address");
            $table->string("time");
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
        Schema::dropIfExists('windows');
    }
}
