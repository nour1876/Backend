<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateUsercontainerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usercontainers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->default(null);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('container_id')->nullable()->default(null);
            $table->foreign('container_id')->references('container_id')->on('containers')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usercontainers',function(Blueprint $table){
            $table->dropForeign(['container_id','user_id']);
        }); 
    }
}
