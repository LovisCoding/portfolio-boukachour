<?php

namespace App\Controllers;

class PageBDD extends BaseController
{
    public function index()
    {
      echo view('misc/top', ['title' => 'Compétence 2 : Analyser et optimiser des applications']);
	  echo view('bdd/index');
	  echo view('misc/bottom');
    }
}
