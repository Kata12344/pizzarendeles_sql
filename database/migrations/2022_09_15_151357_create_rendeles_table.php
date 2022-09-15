<?php

use App\Models\Rendeles;
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
        Schema::create('rendeles', function (Blueprint $table) {
            $table->id('rendeles_id');
            $table->tinyInteger('hány');
            $table->string('fizetési mód',15);
            $table->timestamps();
            $table->foreignId('users_id')->references('users_id')->on('users');
            $table->foreignId('pizza_id')->references('pizza_id')->on('pizzas');
        });
        Rendeles::create(['pizza_id'=>'2','users_id'=>'1','hány'=>'2','fizetési mód'=>'bankkártyás']);
        Rendeles::create(['pizza_id'=>'2','users_id'=>'2','hány'=>'3','fizetési mód'=>'készpénz']);
        Rendeles::create(['pizza_id'=>'3','users_id'=>'3','hány'=>'1','fizetési mód'=>'szép kártya']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendeles');
    }
};
