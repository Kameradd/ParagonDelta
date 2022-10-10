<?php

namespace App\Controllers;


class Home extends BaseController
{
    
    public function index()
    {
        echo view('directfeed');
        // echo view('layout/test');
        // echo view('layout/footer');
        //$this->load->helper('url');
    }
    public function download()
    {
        echo view('layout/header');
        echo view('layout/down');
        echo view('layout/footer');
        
    }
    
    
}
