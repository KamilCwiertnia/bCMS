<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_portfolios', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('display_name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->text('description');
            $table->string('miniature')->default('default.jpg');
            $table->string('preview');
            $table->string('live_preview_url');
            $table->string('client_name');
            $table->integer('status');
            $table->string('project_date');
            $table->integer('category_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category_portfolios');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_portfolios');
        Schema::dropIfExists('portfolio');
    }
}
