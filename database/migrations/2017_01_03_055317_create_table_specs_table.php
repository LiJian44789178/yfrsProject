<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->increments('id')->unsigned()->nullable()->comment('规格id');
            $table->string('name',50)->nullable()->default('')->comment('规格名称');
            $table->integer('cat_id')->nullable()->comment('分类id');
            $table->smallInteger('sort')->nullable()->default(1)->comment('排序');
            $table->enum('readonly',['yes','no'])->nullable()->default('yes')->comment('能够删除');
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
        Schema::dropIfExists('specs');
    }
}
