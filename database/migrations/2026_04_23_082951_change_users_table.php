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
        Schema::table('users', function (Blueprint $table) {
            $table->id('title', 50)->first()->change();
            $table->string('Name',20);
            $table->string('Surname',20);
            $table->integer('age',2)->nullable()->change()->unsigned();
            $table->date('Date of birthday');
            $table->date('Date of registration');
            $table->text('email')->comment('my platform');
            $table->integer('salary')->default('0');
    });

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
