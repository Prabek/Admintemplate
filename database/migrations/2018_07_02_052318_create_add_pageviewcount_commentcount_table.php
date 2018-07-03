<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddPageviewcountCommentcountTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            
            $table->integer('comment_count');
            $table->integer('view_count');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            
            $table->dropColumn('comment_count');
            $table->dropColumn('view_count');

        
        });
    }
}
