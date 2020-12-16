<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('set null');
            $table->foreignId('product_id')->nullable()->references('id')->on('products')->onDelete('set null');
            
            $table->foreignId('master_room_id')->references('id')->on('master_rooms')->onDelete('cascade');
            $table->foreignId('single_room_id')->references('id')->on('single_rooms')->onDelete('cascade');
            $table->foreignId('living_room_id')->references('id')->on('living_rooms')->onDelete('cascade');
            $table->foreignId('dinning_room_id')->references('id')->on('dinning_rooms')->onDelete('cascade');
            $table->foreignId('kitchen_id')->references('id')->on('kitchens')->onDelete('cascade');

            $table->foreignId('master_bed_id')->references('id')->on('master_beds')->onDelete('cascade');
            $table->foreignId('single_bed_id')->references('id')->on('single_beds')->onDelete('cascade');
            $table->foreignId('closet_id')->references('id')->on('closets')->onDelete('cascade');
            $table->foreignId('mirror_id')->references('id')->on('mirrors')->onDelete('cascade');
            $table->foreignId('sofa_id')->references('id')->on('sofas')->onDelete('cascade');
            $table->foreignId('chair_id')->references('id')->on('chairs')->onDelete('cascade');
            $table->foreignId('table_id')->references('id')->on('tables')->onDelete('cascade');
            $table->foreignId('cupboard_id')->references('id')->on('cupboards')->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
