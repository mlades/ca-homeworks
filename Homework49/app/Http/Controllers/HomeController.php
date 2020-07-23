<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Example;

use App\Pdf;

class HomeController extends Controller
{
   
    public function index( )
    {
  
        PDF::WriteHTML('<h1>Hello world!</h1>');
        PDF::WriteHTML('<p> This is mpdf through Laravel facades proxy classes </p>');

        return PDF::Output();
 
    }
}
