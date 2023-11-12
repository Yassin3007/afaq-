<?php

namespace App\Services\Opportunity;

use App\Models\JobOpportunity;

class OpportunityServices
{

    function getOpportunity($id) {
        return JobOpportunity::findOrFail($id);
    }
}
