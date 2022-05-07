<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Pearl of the Indian Ocean';

        echo view('templates/header', $data);
        echo view('home/content');
    }

    
}
