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
        Schema::create('cards', function (Blueprint $table) {
            $table->string("card")->primary();
            $table->string("card_name");
            $table->string("img_name");
            $table->text("main_meaning_dir");
            $table->text("main_meaning_rev");
            $table->text("describe");
            $table->text("meaning_dir");
            $table->text("meaning_rev");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
