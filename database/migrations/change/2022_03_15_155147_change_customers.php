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
    Schema::table('customers', function (Blueprint $table) {
        $table->integer('asmens_mokestis');
        $table->renameColumn('asmens_prierasas', 'asmens_pavadinimas');
        $table->dropColumn('el_pastas');

    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->integer('el_pastas');
            $table->renameColumn('asmens_pavadinimas', 'asmens_prierasas');
            $table->dropColumn('asmens_mokestis');
    
        });
    }
};
