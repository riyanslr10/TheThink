<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('sinopsis')->nullable();
            $table->string('image')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->integer('publication_year');
            $table->integer('page_count');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
    
};