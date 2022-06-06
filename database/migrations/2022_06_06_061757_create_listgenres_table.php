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
        Schema::table('listgenres', function (Blueprint $table) {
            $table->id();
            $table->foreginId('gambar_id')->nullable()->after('id');
            $table->string('genrename');
            $table->string('caption');
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
        Schema::tabel('listgenres', function (Blueprint $table) {
            $table->dropColumn('gambar_id');
            $table->dropColumn('genrename_id');
        });
    }
};
