<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->date('dob');
            $table->integer('phone');
            $table->string('line');
            $table->string('git');
            $table->string('ktp');
            $table->string('cv');
            $table->string('score');
            $table->string('name1');
            $table->string('address1');
            $table->string('email1');
            $table->date('dob1');
            $table->integer('phone1');
            $table->string('line1');
            $table->string('git1');
            $table->string('ktp1');
            $table->string('cv1');
            $table->string('score1');
            $table->string('name2');
            $table->string('address2');
            $table->string('email2');
            $table->date('dob2');
            $table->integer('phone2');
            $table->string('line2');
            $table->string('git2');
            $table->string('ktp2');
            $table->string('cv2');
            $table->string('score2');
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
        Schema::dropIfExists('groups');
    }
}
