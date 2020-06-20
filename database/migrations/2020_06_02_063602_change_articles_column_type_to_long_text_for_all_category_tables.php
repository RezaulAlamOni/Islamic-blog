<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeArticlesColumnTypeToLongTextForAllCategoryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tables = ['akida',
            'quaran',
            'salat',
            'shirktaohid',
            'sium',
            'behave', 'bibaho', 'bibidh', 'bidayat', 'doya', 'fozilotamol', 'ganiderkotha', 'hazz', 'jaalweakhadis', 'jakat', 'jihad', 'kichuhadis'];
        $column = 'articles';
        $newColumnType = 'LONGTEXT';

        foreach ($tables as $table) {
            DB::statement("ALTER TABLE {$table} CHANGE $column $column $newColumnType");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
