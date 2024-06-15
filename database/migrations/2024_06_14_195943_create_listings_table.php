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
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('type');
            $table->integer('zipcode')->unsigned();
            $table->string('bedrooms')->default(0);
            $table->string('bathrooms')->default(1);
            $table->string('squarefootage')->default(100);
            $table->longText('description')->nullable();
            $table->integer('price')->unsigned();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->json('features')->nullable();
            $table->text('slug');
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('listings', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
