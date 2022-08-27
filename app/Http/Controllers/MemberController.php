<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MemberController extends Controller{

  function download(){
  $myfile = 'hello.text';
   return response()
   ->download($myfile);
  }

}