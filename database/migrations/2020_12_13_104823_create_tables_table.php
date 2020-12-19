<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tables', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('meals_id');
            $table->foreign('meals_id')->references('id')->on('meals');

             $table->unsignedInteger('tags_id');
            $table->foreign('tags_id')->references('id')->on('tags');
            
            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');

            $table->unsignedInteger('ingredients_id');
            $table->foreign('ingredients_id')->references('id')->on('ingredients');
             $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
