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
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('name', 'fullname');
            $table->string('group', 2)->after('year_entry');
            $table->dropForeign(['nidn']);
            $table->dropIndex('students_nidn_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('fullname', 'name');
            $table->dropColumn('group');
            $table->foreign('nidn')->references('nidn')->on('lecturers');
        });
    }
};
