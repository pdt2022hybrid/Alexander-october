<?php namespace Hidas\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('hidas_test_notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('day');
            $table->integer('retweets');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hidas_test_notes');
    }
}
