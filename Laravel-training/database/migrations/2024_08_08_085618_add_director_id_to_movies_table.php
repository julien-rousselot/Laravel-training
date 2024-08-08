<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReleaseYearToMoviesTable extends Migration
{
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->year('release_year')->nullable(); // Ajoute une colonne pour l'année
            $table->dropColumn('release_date'); // Supprime l'ancienne colonne si nécessaire
        });
    }

    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->date('release_date')->nullable(); // Restaure l'ancienne colonne en cas de rollback
            $table->dropColumn('release_year'); // Supprime la nouvelle colonne
        });
    }
}
