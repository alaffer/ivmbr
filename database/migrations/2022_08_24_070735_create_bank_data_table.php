<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_data', function (Blueprint $table) {
            $table->id();
            $table->date('buchungsdatum');
            $table->date('valutadatum');
            $table->string('buchungstext');
            $table->text('interne_notiz')->nullable();
            $table->string('währung');
            $table->decimal('betrag', $precision = 8, $scale = 2)->nullable(false);
            $table->text('belegdaten')->nullable();
            $table->string('belegnummer')->nullable();
            $table->string('auftraggebername')->nullable();
            $table->string('auftraggeberkonto')->nullable();
            $table->string('auftraggeber_Blz')->nullable();
            $table->string('empfängername')->nullable();
            $table->string('empfängerkonto')->nullable();
            $table->string('empfänger_blz')->nullable();
            $table->string('zahlungsgrund')->nullable();
            $table->string('zahlungsreferenz')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('bank_data');
    }
};
