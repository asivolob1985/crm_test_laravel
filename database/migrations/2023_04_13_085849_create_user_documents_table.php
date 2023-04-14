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
        Schema::create('user_documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(\App\Models\User::class, 'user_id');
            $table->foreign(['user_id'])->references('id')->on('users')->onDelete('cascade');
            $table->foreignIdFor(\App\Models\DocumentField::class, 'field_id');
            $table->foreign(['field_id'])->references('id')->on('document_fields')->onDelete('cascade');
            $table->text('value');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_documents', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user_id');
            $table->dropConstrainedForeignId('field_id');
        });
        Schema::dropIfExists('user_documents');
    }
};
