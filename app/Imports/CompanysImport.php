<?php

namespace App\Imports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CompanysImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!empty(array_filter($row))) {

            return new Company([
                'name'=>  $row[1],
                'type'=>  $row[2],
                'link' => $row[3]
            ]);
        }
        
    }

    public function startRow(): int
    {
        return 2; // تجاوز الصف الأول (العنوان)
    }
}
