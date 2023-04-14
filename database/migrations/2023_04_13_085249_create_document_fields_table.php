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
        Schema::create('document_fields', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 255);
            $table->foreignIdFor(\App\Models\DocumentType::class, 'type_id');
            $table->foreign(['type_id'])->references('id')->on('document_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('document_fields', function (Blueprint $table) {
            $table->dropConstrainedForeignId('type_id');
        });
        Schema::dropIfExists('document_fields');
    }
};
