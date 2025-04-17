<?php namespace Acme\Newsletter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use Illuminate\Support\Facades\DB;

class CreateTables extends Migration
{
    public function up()
    {
        Schema::create('acme_newsletter_subscribers', function($table)
        {
            $table->increments('id');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_newsletter_subscribers');
    }
}
