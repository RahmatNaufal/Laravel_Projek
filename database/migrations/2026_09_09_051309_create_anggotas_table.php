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
    Schema::create('anggotas', function (Blueprint $table) {
        $table->id(); // bigIncrements primary key secara default
        $table->string('nama');
        $table->string('alamat');
        $table->string('no_telp');
        $table->string('tgl_lhr');
        $table->timestamps();
    });
}
};
