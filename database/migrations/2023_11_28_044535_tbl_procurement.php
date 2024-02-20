<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProcurement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tbl_app', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('id')->unique();
        //     $table->string('employee_id')->unique();
        //     $table->string('pr_number');
        //     $table->string('merge_code');
        //     $table->string('item_title');
        //     $table->integer('unit_id');
        //     $table->integer('category_id');
        //     $table->integer('pmo_id');
        //     $table->integer('quantity');
        //     $table->integer('mode');
        //     $table->integer('price');
        //     $table->integer('remarsk');
        //     $table->string('source_of_funds_id');
        //     $table->timestamp('app_year')->nullable();
        //     $table->rememberToken();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tbl_procurement');

    }
}
