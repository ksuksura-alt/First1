<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePostsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->id('title', 50);//100
            $table->timestamps('ts');//-
            $table->string('name',30);//Name
            $table->text('comments')->comment('my comment');//df text + коментарий
            $table->string('title', 100)->change();
            $table->dropColumn('ts');
            $table->renameColumn('name', 'Name');
            $table->string('comments')->default('text');
            $table->integer('vote')->unsigned();//беззнаковое поле
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');

    }
};
