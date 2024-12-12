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
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained(
                table: 'reports',
                indexName: 'responses_report_id',
            );
            $table->enum('response_status', ['ON_PROCESS', 'DONE', 'REJECT']);
            $table->foreignId('staff_id')->constrained(
                table: 'users',
                indexName: 'responses_staff_id',
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
