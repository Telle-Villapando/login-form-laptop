<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTableNullableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Modify the provider, provider_id, and provider_token columns to be nullable
            $table->string('provider')->nullable()->default(null)->change();
            $table->string('provider_id')->nullable()->default(null)->change();
            $table->string('provider_token')->nullable()->default(null)->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Revert the changes to the columns
            $table->string('provider')->nullable(false)->change();
            $table->string('provider_id')->nullable(false)->change();
            $table->string('provider_token')->nullable(false)->change();
        });
    }
}
