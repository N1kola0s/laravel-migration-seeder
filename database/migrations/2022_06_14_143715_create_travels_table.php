<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 50);
            $table->string('package', 100)->nullable();
            $table->string('start_travel', 20)->nullable();
            $table->string('end_travel', 20)->nullable();
            $table->tinyInteger('travelers')->unsigned()->nullable();
            $table->string('hotel', 50)->nullable();
            $table->tinyInteger('rooms')->unsigned()->nullable();
            $table->string('airline_company', 100)->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 6, 2 )->nullable();
            $table->boolean('is_annulment')->default(1)->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('travels');
    }
}
