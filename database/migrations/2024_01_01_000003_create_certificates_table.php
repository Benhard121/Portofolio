<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('organization');
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('thumbnail')->nullable();
            $table->date('issued_at')->nullable();
            $table->date('expires_at')->nullable();
            $table->string('credential_url')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificates');
    }
};

