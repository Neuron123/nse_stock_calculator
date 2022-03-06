<?php

namespace App\Controllers;

class Maincontroller extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        // ...
        if( !is_file(APPPATH . 'Views/Pages/'. $page . '.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);

        }

        $data['title'] = ucfirst($page);
        echo view('Pages/header', $data);
        echo view('Pages/'. $page, $data);
        echo view('Pages/footer',$data);
    }
}