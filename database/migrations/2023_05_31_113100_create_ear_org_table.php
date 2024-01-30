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
        Schema::create('ear_org', function (Blueprint $table) {
            $table->id();
            $table->datetime('date')->nullable();
            $table->float('z_2047',9,6);
            $table->float('z_3524',9,6);
            $table->float('m_2047',9,6);
            $table->float('m_3524',9,6);
            $table->float('v_2065',9,6);
            $table->float('v_3565',9,6);
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
        Schema::dropIfExists('ear_org');
    }
};