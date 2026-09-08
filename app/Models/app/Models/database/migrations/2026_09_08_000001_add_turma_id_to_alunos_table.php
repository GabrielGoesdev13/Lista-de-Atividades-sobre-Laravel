<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->foreignId('turma_id')->nullable()->constrained('turmas')->nullOnDelete();
        });
    }

    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropForeign(['turma_id']);
            $table->dropColumn('turma_id');
        });
    }
};
