<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogSdgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_sdg', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id');
            $table->foreignId('sdg_id');
            $table->timestamps();

            $table->foreign('blog_id')->references('id')->on('blogs');
            $table->foreign('sdg_id')->references('id')->on('sdgs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_sdg');
    }
}
