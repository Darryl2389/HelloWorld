<?php
# @Author: Darryl Sullivan
# @Date:   2019-09-24T15:03:13+01:00
# @Last modified by:   Darryl Sullivan
# @Last modified time: 2019-09-24T15:06:40+01:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
      return view('hello');
    }
}
