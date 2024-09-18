<?php

namespace App\Controllers;

class PageDev extends BaseController
{
    public function index()
    {
      echo view('misc/top', ['title' => 'Compétence 1 : Adapter une application']);
	  echo view('dev/index');
	  echo view('misc/bottom');
    }
}
