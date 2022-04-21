<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainerTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containers', function (Blueprint $table) {
            $table->increments('container_id');
            $table->float('poids')->default(null);
            $table->string('port_depart');
            $table->string('port_arrive');
            $table->date('time_depart');
            $table->date('time_arrive');
            


        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('containers'); 
    }
}
