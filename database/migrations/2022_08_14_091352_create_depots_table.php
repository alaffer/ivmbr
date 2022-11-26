<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depots', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('bank_name');
            $table->string('blz')->nullable()->default(null);
            $table->string('accountType');
            $table->string('excelName')->unique();
            $table->integer('excelSort')->default(0);
            $table->text('remarks')->nullable()->default(null);
            $table->boolean('active')->default(1);
            $table->softDeletes();
            $table->timestamps();
            // // nur für MySQL möglich
            // //$table->string('formName')->virtualAs('concat(excelName, \' (active=\', if(active=0,\'nein\',\'ja\'), \')\')');
        });
        // nur für SQL-Server möglich und auch notwendig
        DB::unprepared("ALTER TABLE dbo.depots ADD formName AS '[' + cast(id as varchar) + '] ' + excelName  + case when active=1 then ' (aktiv)' else ' (inaktiv)' END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depots');
    }
};
