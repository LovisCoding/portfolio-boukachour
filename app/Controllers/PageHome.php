<?php

namespace App\Controllers;

class PageHome extends BaseController
{
    public function index()
    {
      echo view('misc/top', );
	  echo view('home/index');
	  echo view('misc/bottom');
    }
}
