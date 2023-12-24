<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('publisher')->after('title')->nullable();
            // Add other necessary columns here if needed
        });
    }
    
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('publisher');
            // Drop other columns if you added them
        });
    }
    
};
