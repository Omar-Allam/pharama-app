<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medicines', function (Blueprint $table) {
            $table->string("type_id")->change();
            $table->string('company_id')->change();
            $table->renameColumn('type_id','type');
            $table->renameColumn('company_id','company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicines', function (Blueprint $table) {
            $table->integer("type")->change();
            $table->integer('company')->change();
            $table->renameColumn('type','type_id');
            $table->renameColumn('company','company_id');

        });
    }
}
