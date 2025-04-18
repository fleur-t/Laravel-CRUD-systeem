<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('body');  // Voeg een body veld toe
            $table->decimal('price', 8, 2);  // Voeg een prijs veld toe
        });
    }
    
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['body', 'price']);  // Verwijder de velden als de migratie wordt teruggedraaid
        });
    }
    
};
