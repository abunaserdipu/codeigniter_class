<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "My Home page";
        $data['copyright'] = "Copyright &copy; 2022 All rights reserved";
        return view('welcome_message', $data);
        // echo view('includes/footer');
    }

    public function about()
    {
        $data['title'] = "About Us";
        $data['copyright'] = "Copyright &copy; 2022 All rights reserved";
        return view('about_us', $data);
    }

    public function contact()
    {
        $data['title'] = "Contact Us";
        $data['copyright'] = "Copyright &copy; 2022 All rights reserved";
        return view("contact_us", $data);
    }
}
