<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Authour;
use App\Models\Topic;
use App\Models\Language;
use PharIo\Manifest\Author;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Language::class)->constrained();
            $table->foreignIdFor(Topic::class)->constrained();
            $table->foreignIdFor(Author::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.php
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
