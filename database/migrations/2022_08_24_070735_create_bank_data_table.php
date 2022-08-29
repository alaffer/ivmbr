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
            $table->date('Buchungsdatum');
            $table->date('Valutadatum');
            $table->string('Buchungstext');
            $table->string('Interne_Notiz')->nullable();
            $table->string('Währung');
            $table->decimal('Betrag', $precision = 8, $scale = 2);
            $table->string('Belegdaten')->nullable();
            $table->string('Belegnummer')->nullable();
            $table->string('Auftraggebername')->nullable();
            $table->string('Auftraggeberkonto')->nullable();
            $table->string('Auftraggeber')->nullable();
            $table->boolean('ImportedInBooking')->default(0);
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
