<?php


class Front extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function home()
    {
        $this->render("front/home/index","Home");
    }


    public function render($view,$title,$data=array())
    {
        $data['title']=$title;
        $this->load->view("front/header",$data);
        $this->load->view($view,$data);
        $this->load->view("front/footer",$data);
    }
}