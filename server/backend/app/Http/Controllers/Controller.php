<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function respondUnauthorized()
    {
        return response()->json(["error"=>"unauthorized"],401);
    }

    public function respondInvalidData()
    {
        return response()->json(["error"=>"invalid data"],422);
    }
}
