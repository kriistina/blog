<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClanciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clanci', function (Blueprint $table) {
            $table->id();
            $table->string('naslov');
            $table->text('sadrzaj');
            $table->date('datum_objave');
            $table->string('slika');
            $table->foreignId('korisnik_id')->constrained('users');
            $table->foreignId('kategorija_id')->constrained('kategorije');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clanci');
    }
}
