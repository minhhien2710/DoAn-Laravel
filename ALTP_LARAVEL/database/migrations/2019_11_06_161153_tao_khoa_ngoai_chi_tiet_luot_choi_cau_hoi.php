<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoKhoaNgoaiChiTietLuotChoiCauHoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chi_tiet_luot_choi', function (Blueprint $table) {
            $table->foreign('cau_hoi_id')->references('id')->on('cau_hoi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chi_tiet_luot_choi', function (Blueprint $table) {
            //
        });
    }
}
