<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
  public function index(){

    $a = 'hello';


    return view('page.home',compact('a'));
    // return view('page.home',['a' => $a]);
  }
}
