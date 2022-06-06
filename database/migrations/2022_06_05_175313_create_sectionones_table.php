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
        Schema::table('sectionones', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->foreginId('gambar_id')->nullable()->after('id');
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
        Schema::table('sectionones', function (Blueprint $table) {
            $table->dropColumn('gambar_id');
        });
    }
};
