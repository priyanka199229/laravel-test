<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersdata', function (Blueprint $table) {
            $table->id();
    
        $table->text('fnm');
        $table->text('lnm');
        $table->text('email');
        $table->text('contact_number');
        $table->text('address1');
        $table->text('address2');
        $table->text('country');
        $table->text('state');
        $table->text('city');
        $table->text('zip_coad');
        $table->text('Hobbies');
        $table->text('img');
        $table->text('password');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersdata');
    }
}
