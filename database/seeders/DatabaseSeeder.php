<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountriesSeeder::class);
        $this->call(DocumentsSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserDocumentsSeeder::class);
    }
}
