<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->integer('user_id')->unsigned();
            $table->text('description');
            $table->text('short_description')->nullable();
            $table->string('location');
            $table->string('vacancy');
            $table->string('experience');
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->enum('job_status', ['published', 'draft', 'expired'])->default('published');
            $table->date('deadline');
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_posts');
    }
}
