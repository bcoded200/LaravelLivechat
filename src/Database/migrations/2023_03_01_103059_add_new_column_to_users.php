<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn('users','role'))
        {

        }
        else
        {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role')->after('name')->nullable();
            $table->timestamps();
        });

    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //

            $table->dropIfExists('users');
        });
    }
}
