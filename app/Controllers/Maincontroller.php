<?php

namespace App\Controllers;

class Maincontroller extends BaseController
{
    // function __construct() {
    //     parent::__construct();
        
    //     // Load url helper
    //     $this->load->helper('url');
    //     }

    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        //Loading url helper
        helper('url');

        // check if file exists
        if( !is_file(APPPATH . 'Views/Pages/'. $page . '.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        //check if method is post
        // if ($this->request->getMethod() === 'post'){
        //     // $username = $this->input->post();
        //     $oldprice = $this->input->post("price");
        //     $data['newprice'] = $oldprice;
        // }

        $data['title'] = ucfirst($page);

        if (isset($data['newprice'])){
            $data['newprice'] = $data['newprice'];
        }else{
           $data["newprice"] = 0;
        }

        echo view('Pages/header', $data);
        echo view('Pages/'. $page, $data);
        echo view('Pages/footer',$data);
    }

    /////////
    public function form_calculator($page = 'home')
    {
        //Loading url helper
        helper('url');

        // check if file exists
        if( !is_file(APPPATH . 'Views/Pages/'. $page . '.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $oldprice = $this->request->getVar('price');
        $amount = $this->request->getVar('amt');

        $newprice = (5/$amount) + $oldprice;
        
        $data['newprice'] = $newprice;
        $data['title'] = ucfirst($page);

        if (isset($data['newprice'])){
            $data['newprice'] = $data['newprice'];
        }else{
           $data["newprice"] = 0;
        }

        echo view('Pages/header', $data);
        echo view('Pages/'. $page, $data);
        echo view('Pages/footer',$data);
    }
}