<?php

namespace App\Controllers;

class PageGPO extends BaseController
{
    public function index()
    {
      echo view('misc/top', ['title' => 'Compétence 6 : Manager une équipe informatique']);
	  echo view('gpo/index');
	  echo view('misc/bottom');
    }
}
