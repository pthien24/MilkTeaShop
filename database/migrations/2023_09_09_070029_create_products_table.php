<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id(); // Auto-incremental primary key
            $table->string('name');
            $table->integer('price');
            $table->string('description');
            $table->string('image');
            $table->unsignedBigInteger('category_id'); // Foreign key
            $table->timestamps(); // Created at and updated at timestamps
            // Define the foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories');
=======
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->integer('price');
            $table->timestamps();
>>>>>>> 6c106f6d7bc73b163005cafb3b6cc7299d3ec430
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
