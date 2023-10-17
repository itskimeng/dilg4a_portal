<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblApp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_app', function (Blueprint $table) {
            $table->id();
            $table->string('sn')->unique();
            $table->string('code')->unique();
            $table->string('new_entry');
            $table->string('merge_code');
            $table->string('item_title');
            $table->integer('unit_id');
            $table->integer('category_id');
            $table->integer('pmo_id');
            $table->integer('quantity');
            $table->integer('mode');
            $table->integer('price');
            $table->integer('remarsk');
            $table->string('source_of_funds_id');
            $table->timestamp('app_year')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_app');
    }
}
