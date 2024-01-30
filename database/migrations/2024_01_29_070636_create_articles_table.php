<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('source_id');
            $table->string('title');
            $table->text('content');
            $table->string('reference');
            $table->enum('status', ['draft', 'published']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('article_categories');
            $table->foreign('source_id')->references('id')->on('article_sources');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
