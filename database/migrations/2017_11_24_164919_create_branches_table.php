<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->smallIncrements('branch_id', 6);
            $table->string('branch_name', 50);
            $table->string('branch_code', 10);
            $table->string('branch_city', 20);
            $table->smallInteger('branch_contact_no', false, 12);
            $table->string('branch_mail', 50);
            $table->string('branch_address', 100);
            $table->tinyInteger('is_active', false, 1);
            
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
        Schema::dropIfExists('branches');
    }
}
