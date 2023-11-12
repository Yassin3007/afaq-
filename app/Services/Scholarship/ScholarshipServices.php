<?php

namespace App\Services\Scholarship;

use App\Models\Scholarship;

class ScholarshipServices
{

    function getScholarship($id) {
        return Scholarship::findOrFail($id);
    }
}
