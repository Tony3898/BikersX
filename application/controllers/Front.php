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
        if (!isset($_SESSION['bikers_logged_id']))
            $this->render("auth/signin", "Sign In");
        else
            $this->render("front/home/index", "Home");
    }

    public function signup()
    {
        if (!isset($_SESSION['bikers_logged_id']))
            $this->render("auth/signup", "Sign Up");
        else
            $this->render("front/home/index", "Home");
    }
}