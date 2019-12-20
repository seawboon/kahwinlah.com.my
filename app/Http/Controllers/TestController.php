<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class TestController extends Controller
{

  public function mail()
  {
   $name = 'SB Yeap';
   Mail::to('seawboon@1leaf.com.my')->send(new TestMail($name));

   return 'Email was sent';
  }

}
