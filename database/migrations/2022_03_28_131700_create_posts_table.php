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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->char("titolo", 255);
            $table->char("stato", 255);
            $table->decimal("prezzo");
            $table->bigInteger("chilometraggio");
            $table->date("immatricolazione");
            $table->bigInteger("potenza");
            $table->char("cilindrata", 255);
            $table->char("colore", 255);
            $table->char("alimentazione", 255);
            $table->char("carrozzeria", 255);
            $table->text("descrizione", 255);
            $table->char("indirizzo", 255);
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('city_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('model_id')->references('id')->on('carmodels')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('city_id')->references('id')->on('cities')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
