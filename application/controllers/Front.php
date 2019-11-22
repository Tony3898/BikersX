<?php


class Front extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $this->render("front/home/index", "Home");
    }

    public function welcome()
    {
        $this->load->view('welcome_message');
    }

    public function gallery()
    {
        $this->render("front/home/gallery", "Gallery");
    }

    public function contact()
    {
        $this->render("front/home/contact", "Contact");
    }
    public function about()
    {
        $this->render("front/home/about", "About Us");
    }
    public function signin()
    {
        $this->render("auth/signin","Sign In");
    }
    public function signup()
    {
        $this->render("auth/signup","Sign Up");
    }
}