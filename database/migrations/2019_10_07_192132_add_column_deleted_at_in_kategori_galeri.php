<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDeletedAtInKategoriGaleri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori_galeri', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('galeri', function (Blueprint $table) {
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
        Schema::table('kategori_galeri', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('galeri', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
