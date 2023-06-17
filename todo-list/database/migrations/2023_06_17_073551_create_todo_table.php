<?php

use App\Constants\TodoConstants;
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
        Schema::create(TodoConstants::TABLE_TODO, function (Blueprint $table) {
            $table->id(TodoConstants::COLUMN_TODO_NO);
            $table->string(TodoConstants::COLUMN_TODO_DESCRIPTION);
            $table->boolean(TodoConstants::COLUMN_IS_COMPLETED)->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(TodoConstants::ENTITY);
    }
};
