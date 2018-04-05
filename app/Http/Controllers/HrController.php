<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrController extends Controller
{
  /**
   * showing main dashboard for HR role
   */
  public function Index(){
    return view('hr.index');
  }
}
