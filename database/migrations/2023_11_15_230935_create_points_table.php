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
        Schema::create('points', function (Blueprint $table) {
            $table->ulid("id")->unique();
            $table->foreignUlid("link_id")->nullable()->references("id")->on("links")->cascadeOnDelete();
            $table->foreignUlid("user_id")->references("id")->on("users");
            $table->enum("type" , ["REFERRAL" , "VISIT","LINK"]);
            $table->integer("point");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('points');
    }
};
