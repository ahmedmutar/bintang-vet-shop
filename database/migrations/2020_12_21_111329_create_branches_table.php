<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('branch_code');
            $table->string('branch_name');
            $table->boolean('isDeleted')->nullable()->default(false);
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->timestamp('deleted_at',0)->nullable();
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
