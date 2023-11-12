<?php

namespace App\Services\Company;

use App\Models\Company;

class CompanyServices
{

    public function getCompany($id){
        $company = Company::findOrFail($id);
        return $company ;
    }
}
