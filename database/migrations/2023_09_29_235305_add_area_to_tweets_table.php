<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tweets', function (Blueprint $table) {
            $table->string('area'); // 새로운 컬럼 추가
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('tweets', function (Blueprint $table) {
            $table->dropColumn('area'); // 컬럼 롤백
        });
    }
};