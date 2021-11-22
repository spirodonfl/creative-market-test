<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('category');
            $table->string('portfolio_link')->unique();
            $table->string('portfolio_link_confirmed')->nullable();
            $table->boolean('online_store');
            $table->text('online_stores')->nullable();
            $table->string('answer_quality');
            $table->string('answer_experience');
            $table->string('answer_understanding');
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
        Schema::dropIfExists('applications');
    }
}
