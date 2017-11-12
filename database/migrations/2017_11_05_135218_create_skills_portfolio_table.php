<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsPortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('portfolio_skill_portfolio', function (Blueprint $table) {
            $table->integer('portfolio_id')->unsigned();
            $table->integer('skill_portfolio_id')->unsigned();
            $table->timestamps();

            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');
            $table->foreign('skill_portfolio_id')->references('id')->on('skill_portfolios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_skill_portfolio');
        Schema::dropIfExists('skill_portfolios');
    }
}
