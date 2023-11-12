<?php

namespace App\Services\Routes;

use App\Models\Route;

class RoutesServices
{

    public function getRoute($id){
        $route = Route::findOrFail($id);
        return $route ;
    }
}
