<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDirectoryController extends Controller
{
  public function index()
  {
    return view('hr.student-directory.index');
  }
}
