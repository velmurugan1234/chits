<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chit_groups', function (Blueprint $table) {
            $table->smallIncrements('chit_group_id', false, 6);
            $table->smallInteger('chit_scheme_id', false, 6);
            $table->smallInteger('branch_id', false, 6);
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
        Schema::dropIfExists('chit_groups');
    }
}
