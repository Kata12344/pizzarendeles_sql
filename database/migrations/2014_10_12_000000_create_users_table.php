<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('users_id');
            $table->string('name',30);
            $table->string('email',30);
            $table->timestamps();
        });
        User::create(['name'=> 'Juli', 'email'=> 'juli88@email.com']);
        User::create(['name'=> 'Peti', 'email'=> 'peti01@email.com']);
        User::create(['name'=> 'Heni', 'email'=> 'heni92@email.com']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
