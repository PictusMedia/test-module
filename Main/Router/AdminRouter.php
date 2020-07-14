<?php

namespace App\Modules\Main\Router;

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Support\Str;

class AdminRouter extends Router
{

    /**
     * @param $routeName
     * @param $controllerPath
     */
    public function adminResource($routeName, $controllerPath)
    {
        $bindName = Str::singular($routeName, 1);

        Route::put("$routeName/{{$bindName}}/status", "{$controllerPath}@restore")->name("{$routeName}.status");
      //  Route::put("$routeName/{{$bindName}}/sort", "{$controllerPath}@restore")->name("{$routeName}.sort");

        Route::resource($routeName, $controllerPath);
    }
}
