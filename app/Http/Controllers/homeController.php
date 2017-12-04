<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
   public function welcome()
   {
      return view('welcome');
   }
   public function about()
   {
      return view('about');
   }
}