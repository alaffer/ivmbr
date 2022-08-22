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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('remarks')->nullable()->default(null);
            $table->unsignedDecimal('maxsupport', $precision = 8, $scale = 2)->nullable()->default(null);
            $table->unsignedDecimal('maxsupportperyear', $precision = 8, $scale = 2)->nullable()->default(null);
            $table->boolean('is_employee_support')->default(1);
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('categories');
    }
};
