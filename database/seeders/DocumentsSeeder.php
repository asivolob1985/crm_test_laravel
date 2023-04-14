<?php

namespace Database\Seeders;

use App\Models\DocumentField;
use App\Models\DocumentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $docs = [
            [
                'name' => 'Паспорт',
                'fields' => [
                    'Дата выдачи',
                    'Кем выдан',
                    'Номер',
                ]
            ],
            [
                'name' => 'Водительское удостоверение',
                'fields' => [
                    'Дата выдачи',
                    'Номер в/у',
                ]
            ],
            [
                'name' => 'Пенсионное свидетельство',
                'fields' => [
                    'Дата выдачи',
                    'Номер свидетельства',
                ]
            ],
            [
                'name' => 'Банковская карта',
                'fields' => [
                    'Номер карты',
                    'Валидна до',
                    'Владелец',
                ]
            ],
        ];

        foreach ($docs as $doc) {
            $docType = new DocumentType();
            $docType->name = $doc['name'];
            $docType->save();

            $docFields = $doc['fields'];
            foreach ($docFields as $field){
                $docField = new DocumentField();
                $docField->name = $field;
                $docField->type()->associate($docType);
                $docField->save();
            }
        }
    }
}
