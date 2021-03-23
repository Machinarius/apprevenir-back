<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
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
                'Nombres' => $collection->profile->first_names, 
                'Apellidos' => $collection->profile->last_names.' '.$collection->profile->last_names_two, 
                'Email' => $collection->email, 
                'Estado' => $collection->status == 1 ? 'Activo' : 'Inactivo'
            ];
        }
        
        return collect($users);
    }

    public function headings(): array
    {   
        $headers = [
            'ID', 'Nombres', 'Apellidos', 'Email', 'Estado'
        ];

        return $headers;
    }  
}