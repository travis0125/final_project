<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCookbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cookbooks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chef_id')->unsigned();
            $table->string('title',15);
            $table->string('type',5);
            $table->text('ingredient');
            $table->text('flavor');
            $table->text('step');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('chef_id')
                ->references('id')
                ->on('chefs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cookbooks');
    }
}
