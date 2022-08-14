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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('depot_id')->unsigned()->nullable()->constrained()->default(null);
            $table->foreignId('category_id')->constrained();
            $table->datetime("date");
            $table->text("purpose");
            $table->integer("support_year")->nullable()->default(null);
            $table->unsignedDecimal('payin', $precision = 8, $scale = 2)->nullable();
            $table->unsignedDecimal('payout', $precision = 8, $scale = 2)->nullable();
            $table->string('person')->nullable()->default(null);
            $table->text('remarks')->nullable()->default(null);
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
        Schema::dropIfExists('bookings');
    }
};
