<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        //realizar cambios 
    Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id')->unsigned()->index();
        $table->string('title');
        $table->text('description');
        $table->decimal('pricing',9,2);//centavos para tratar de evitarlos puede tener hasta nueve dijitos y dos decimales 
        $table->timestamps();
    });
    }

    

    
    public function down()
    {
        //revertir los cambios hechos en up 
    Schema::drop('products');

    }
}
