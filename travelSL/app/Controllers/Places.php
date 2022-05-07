<?php

namespace App\Controllers;

class Places extends BaseController
{
    public function index()
    {
        $data['title'] = 'Places to visit';

        echo view('templates/header', $data);
        echo view('places/content');
    }
}