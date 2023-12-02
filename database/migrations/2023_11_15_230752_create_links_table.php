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
        Schema::create('links', function (Blueprint $table) {
            $table->ulid("id")->unique();
            $table->foreignUlid("user_id")->references("id")->on("users");
            $table->string("name");
            $table->integer("code");
            $table->string("source");
            $table->string("short_link");
            $table->integer("points");
            $table->enum("status" , [ "ACTIVE" , "BLOCK" , "PENDING" ])->default("PENDING");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
