<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function showAll(Collection $collection, $code = 200 )
  {
    return response()->json(['data' => $collection, 'code' => $code ], $code);
  }
  public function showOne(Model $model, $code)
  {
    return response()->json(['data' => $model, 'code' => $code ], $code);
  }
}
