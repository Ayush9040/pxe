<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;


class AboutUsController extends Controller
{
   
  public function index()
  {
      return view('front.about');
  }


}


