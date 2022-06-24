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
        Schema::create('tb_golongan', function (Blueprint $table) {
            $table->increments('mhsw_id');
            $table->string('gol_kode', 10);
            $table->string('gol_nama', 50);
            $table->timestamps('created_at', NULL);
            $table->datetime('updated_at', NULL);
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
        Schema::dropIfExists('tb_golongan');
    }
};