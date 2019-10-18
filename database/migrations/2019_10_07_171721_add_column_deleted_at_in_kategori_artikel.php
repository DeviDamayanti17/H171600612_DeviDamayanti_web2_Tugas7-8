<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDeletedAtInKategoriArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori_artikel', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('artikel', function (Blueprint $table) {
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategori_artikel', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('artikel', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

    }
}
