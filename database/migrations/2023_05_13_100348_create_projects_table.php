<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name_th');
            $table->string('project_name_en');
            $table->string('project_abstract_th');
            $table->string('project_abstract_en');
            $table->string('project_keyword_th');
            $table->string('project_keyword_en');
            $table->string('project_bookfile');
            $table->string('author_id');
            $table->string('user_id');
            $table->string('category_id');
            $table->string('curriculum_id');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
