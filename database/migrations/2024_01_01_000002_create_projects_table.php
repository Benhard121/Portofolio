<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('category')->default('web'); // web, mobile, desktop, ai, game
            $table->string('technologies')->nullable(); // comma-separated
            $table->string('status')->default('completed'); // completed, ongoing, planning
            $table->string('thumbnail')->nullable();
            $table->string('github_url')->nullable();
            $table->string('live_url')->nullable();
            $table->boolean('featured')->default(false);
            $table->date('project_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};

