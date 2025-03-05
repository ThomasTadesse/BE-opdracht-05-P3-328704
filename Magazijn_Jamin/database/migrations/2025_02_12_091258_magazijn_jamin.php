<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->mediumIncrements('Id');
            $table->string('Naam', 255);
            $table->string('Barcode', 13);
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen', 255)->nullable();
            $table->dateTime('DatumAangemaakt', 6);
            $table->dateTime('DatumGewijzigd', 6);
            $table->timestamps();
        });

        Schema::create('Magazijn', function (Blueprint $table) {
            $table->mediumIncrements('Id');
            $table->mediumInteger('ProductId')->unsigned();
            $table->decimal('VerpakkingsEenheid', 4, 1);
            $table->smallInteger('AantalAanwezig')->unsigned();
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen', 255)->nullable();
            $table->dateTime('DatumAangemaakt', 6);
            $table->dateTime('DatumGewijzigd', 6);
            $table->foreign('ProductId')->references('Id')->on('Product');
            $table->timestamps();
        });

        Schema::create('Contact', function (Blueprint $table) {
            $table->smallIncrements('Id');
            $table->string('Straat', 60);
            $table->string('Huisnummer', 10);
            $table->string('Postcode', 6);
            $table->string('Stad', 60);
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen', 255)->nullable();
            $table->dateTime('DatumAangemaakt', 6);
            $table->dateTime('DatumGewijzigd', 6);
            $table->timestamps();
        });

        Schema::create('Leverancier', function (Blueprint $table) {
            $table->smallIncrements('Id');
            $table->smallInteger('ContactId')->unsigned();
            $table->string('Naam', 60);
            $table->string('Contactpersoon', 60);
            $table->string('Leveranciernummer', 11);
            $table->string('Mobiel', 11);
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen', 255)->nullable();
            $table->dateTime('DatumAangemaakt', 6);
            $table->dateTime('DatumGewijzigd', 6);
            $table->foreign('ContactId')->references('Id')->on('Contact');
            $table->timestamps();
        });

        Schema::create('ProductPerLeverancier', function (Blueprint $table) {
            $table->mediumIncrements('Id');
            $table->smallInteger('LeverancierId')->unsigned();
            $table->mediumInteger('ProductId')->unsigned();
            $table->date('DatumLevering');
            $table->integer('Aantal')->unsigned();
            $table->date('DatumEerstVolgendeLevering')->nullable();
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen', 255)->nullable();
            $table->dateTime('DatumAangemaakt', 6);
            $table->dateTime('DatumGewijzigd', 6);
            $table->foreign('LeverancierId')->references('Id')->on('Leverancier');
            $table->foreign('ProductId')->references('Id')->on('Product');
            $table->timestamps();
        });

        Schema::create('Allergeen', function (Blueprint $table) {
            $table->smallIncrements('Id');
            $table->string('Naam', 60);
            $table->string('Omschrijving', 60);
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen', 255)->nullable();
            $table->dateTime('DatumAangemaakt', 6);
            $table->dateTime('DatumGewijzigd', 6);
            $table->timestamps();
        });

        Schema::create('ProductPerAllergeen', function (Blueprint $table) {
            $table->mediumIncrements('Id');
            $table->mediumInteger('ProductId')->unsigned();
            $table->smallInteger('AllergeenId')->unsigned();
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen', 255)->nullable();
            $table->dateTime('DatumAangemaakt', 6);
            $table->dateTime('DatumGewijzigd', 6);
            $table->foreign('ProductId')->references('Id')->on('Product');
            $table->foreign('AllergeenId')->references('Id')->on('Allergeen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductPerAllergeen');
        Schema::dropIfExists('Allergeen');
        Schema::dropIfExists('ProductPerLeverancier');
        Schema::dropIfExists('Leverancier');
        Schema::dropIfExists('Contact');
        Schema::dropIfExists('Magazijn');
        Schema::dropIfExists('Product');
    }
};
