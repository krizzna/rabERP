<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coils', function(Blueprint $table)
	{
	     $table->increments('id');
	     $table->string('nocoil');
	     $table->string('spec');
	     $table->string('size');
	     $table->decimal('weight', 5, 2);
	     $table->string('wh');
	     $table->timestamp('date_in');
	     $table->timestamps();
	});
	Schema::create('customers', function(Blueprint $table)
	{
	     $table->increments('id');
	     $table->string('name');
	     $table->string('address');
	     $table->timestamps();
	});
	Schema::create('cuttings', function(Blueprint $table)
	{
	     $table->increments('id');
	     $table->string('cutting_no');
	     $table->integer('customer_id')->unsigned();
	     $table->foreign('customer_id')
	           ->references('id')->on('customers')
		   ->onDelete('cascade');
	     $table->string('created_by');
	     $table->timestamps();
	});
	Schema::create('cuttingitems', function(Blueprint $table)
	{
	     $table->increments('id');
	     $table->integer('coil_id')->unsigned();
	     $table->foreign('coil_id')
	           ->references('id')->on('coils')
		   ->onDelete('cascade');
	     $table->string('size');
	     $table->integer('pcs');
	     $table->decimal('weight', 5, 2);
	     $table->string('vessel');
	     $table->timestamp('delivery_date');
	     $table->string('po_no');
	     $table->string('chamber');
	     $table->string('width');
	     $table->string('length');
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
        Schema::dropIfExists('coils');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('cuttings');
        Schema::dropIfExists('cuttingitems');
    }
}
