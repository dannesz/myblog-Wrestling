<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // $table->bigInteger('category_id')->unsigned();
            
            // 'category_id' es una llave foranea, hace referencia alal campo 'id' en la tabla 'categories'
            $table->foreignId('category_id')->constrained('categories');

            $table->string('title');
            $table->longText('content');
            $table->string('author')->nullable();

            

            $table->timestamps();

            // Cada que creemos un post se necesita un id de categoría
            // $table->unsignedBigInteger('category_id');
            
            // $table->foreign('category_id')->references('id')->categories();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
