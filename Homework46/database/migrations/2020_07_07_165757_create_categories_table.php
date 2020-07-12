<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('card_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id'); 
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
         
            $table->unique(['cards_id', 'category_id']);

            $table->foreign('cards_id') 
                  ->references('id') 
                  ->on('cards')  
                  ->onDelete('cascade');  

            $table->foreign('category_id') 
                  ->references('id') 
                  ->on('categories')  
                  ->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
