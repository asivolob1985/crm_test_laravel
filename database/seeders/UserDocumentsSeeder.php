<?php

namespace Database\Seeders;

use App\Models\DocumentField;
use App\Models\DocumentType;
use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDocument::truncate();

        $users = User::all();

        foreach ($users as $user) {
            $docTypes = DocumentType::inRandomOrder()->limit(rand(0, 3))->get();
            foreach($docTypes as $docType){
                $docFields = $docType->fields()->get();
                foreach($docFields as $field){
                    $docField = new UserDocument();
                    $docField->value = rand(1000000000, 99999999999);
                    $docField->user()->associate($user);
                    $docField->field()->associate($field);
                    $docField->save();
                }
            }
        }
    }
}
