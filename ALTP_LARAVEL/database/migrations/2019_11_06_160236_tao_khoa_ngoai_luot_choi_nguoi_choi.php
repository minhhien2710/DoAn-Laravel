<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoKhoaNgoaiLuotChoiNguoiChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luot_choi', function (Blueprint $table) {
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('luot_choi', function (Blueprint $table) {
            //
        });
    }
}
