<?php namespace Quanganhdo\Database\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateQuanganhdoDatabase extends Migration
{
    public function up()
    {
        Schema::create('quanganhdo_database_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('hoten');
            $table->string('email', 255);
            $table->integer('phone');
            $table->string('subject', 255);
            $table->string('message', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('quanganhdo_database_');
    }
}
