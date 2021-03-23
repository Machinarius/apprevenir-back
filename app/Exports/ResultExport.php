<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResultExport implements FromCollection, WithHeadings
{
    public function __construct($collections)
    {
        $this->collections = $collections;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {  
        $results = [];

        foreach ($this->collections as $key => $collection) {
            
            $results[] = [
                'ID usuario' => $collection->user_id, 
                'ID' => $collection->id, 
                'Test' => $collection->testName, 
                'Fecha' => $collection->date, 
                'Hora' => $collection->time,
                'Usuario' => $collection->user->profile->first_names.' '.$collection->user->profile->last_names.' '.$collection->user->profile->last_names_two,
                'Ciudad' => $collection->user->profile->city != null ? $collection->user->profile->city->name : '',
                'Nivel' => $collection->resultLevel,
                'Teléfono' => $collection->user->profile->phone,
                'Email' => $collection->user->email
            ];
        }
        
        return collect($results);
    }

    public function headings(): array
    {   
        $headers = [
            'ID usuario', 'ID', 'Test', 'Fecha', 'Hora', 'Usuario', 'Ciudad', 'Nivel', 
            'Teléfono','Email'
        ];

        return $headers;
    }  
}