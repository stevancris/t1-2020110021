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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->char('no_isbn', 13);
            $table->string('judul_buku')->nullabel(false);
            $table->integer('total_halaman')->unsigned()->nullable(false)->default(0);
            $table->string('kategori')->default('uncategorized');
            $table->string('penerbit')->nullabel(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
