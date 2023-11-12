<?php

namespace App\Services\Training;

use App\Models\Training;

class TrainingServices
{

    function getTraining($id) {
        return Training::findOrFail($id);
    }
}
