<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("program_id")->nullable();
            $table->foreignId("business_operation_id")->nullable();
            $table->foreignId("research_group_id")->nullable();
            $table->foreignId("sdg_id")->nullable();
            $table->foreignId("activity_id")->nullable();
            $table->string("description");
            $table->text("impact");
            $table->string("link");
            $table->string("contact_name");
            $table->string("contact_email");
            $table->boolean("visibility")->default(false);
            $table->timestamps();

            $table->foreign("program_id")->references("id")->on("programs")->nullOnDelete();
            $table->foreign("business_operation_id")->references("id")->on("business_operations")->nullOnDelete();
            $table->foreign("research_group_id")->references("id")->on("research_groups")->nullOnDelete();
            $table->foreign("sdg_id")->references("id")->on("sdgs")->nullOnDelete();
            $table->foreign("activity_id")->references("id")->on("activities")->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
