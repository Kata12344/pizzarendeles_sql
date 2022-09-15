<?php

use App\Models\Pizza;
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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id('pizza_id');
            $table->string('név',30);
            $table->tinyInteger('méret');
            $table->string('jellegzetesség', 50);
            $table->timestamps();
        });
        Pizza::create(['név'=>'magyaros','méret'=>'26','jellegzetesség'=>'csípős']);
        Pizza::create(['név'=>'zöldséges','méret'=>'32','jellegzetesség'=>'vegetáriánus']);
        Pizza::create(['név'=>'hawai','méret'=>'26','jellegzetesség'=>'ananászos']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
};
