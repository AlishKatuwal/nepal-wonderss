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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->foreignId('package_id')->references('id')->on('packages');
            $table->foreignId('feedback_id')->references('id')->on('feedbacks');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->text('map');
            $table->string('contact_no');
            $table->string('email');
            $table->decimal('rating', 2, 1)->default(0);
            $table->string('description',);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
