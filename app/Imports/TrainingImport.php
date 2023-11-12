<?php

namespace App\Imports;

use App\Models\Training;
use Maatwebsite\Excel\Concerns\ToModel;

class TrainingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!empty(array_filter($row))) {

            return new Training([
                'name'=>  $row[1],
                'description'=>  $row[2],
                'link' => $row[3]
            ]);
        }
       
    }
}
