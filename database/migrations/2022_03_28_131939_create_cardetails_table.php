<?php

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
        Schema::create('cardetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("proprietari");
            $table->char("cambio", 255);
            $table->char("rivestimenti", 255);
            $table->char("vernice", 255);
            $table->bigInteger("posti");
            $table->bigInteger("porte");
            $table->text("consumi");
            $table->text("emissioni");
            $table->text("equipaggiamento");
            $table->timestamps();
            $table->unsignedBigInteger("post_id");
            $table->foreign("post_id")->references("id")->on("posts")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardetails');
    }
};
