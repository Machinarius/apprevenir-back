<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ClientExport implements FromCollection, WithHeadings
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
        $users = [];

        foreach ($this->collections as $key => $collection) {
            
            $users[] = [
                'ID' => $collection->id, 
                'Nombre' => $collection->profile->first_names, 
                'Tipo' => $collection->client, 
                'Estado' => $collection->status == 1 ? 'Activo' : 'Inactivo'
            ];
        }
        
        return collect($users);
    }

    public function headings(): array
    {   
        $headers = [
            'ID', 'Nombre', 'Tipo', 'Estado'
        ];

        return $headers;
    }  
}