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
    Schema::create('blogs', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('category_id')->nullable();

        $table->string('title')->nullable();
        $table->string('slug')->unique();
        $table->text('short_description')->nullable();
        $table->longText('description')->nullable();

        // Media
        $table->string('banner')->nullable();
        $table->string('banner_alt')->nullable();

        // SEO Meta
        $table->string('meta_title')->nullable();
        $table->string('meta_img')->nullable();
        $table->text('meta_description')->nullable();
        $table->string('meta_keywords')->nullable();
        $table->enum('status', ['active', 'inactive'])->default('inactive');
        $table->timestamps();

    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
