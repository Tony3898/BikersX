<?php


class Front extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render($view, $title, $data = array())
    {
        $data['title'] = $title;
        $this->load->view("front/header", $data);
        $this->load->view($view, $data);
        $this->load->view("front/footer", $data);
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

}