<?php


class MY_Controller extends CI_Controller
{
    public function render($view, $title, $data = array())
    {
        $data['title'] = $title;
        $this->load->view("front/header", $data);
        $this->load->view($view, $data);
        $this->load->view("front/footer", $data);
    }

    public function get_incremental_id($collection)
    {
        if ($this->mongo_db->count($collection) > 0) {
            $last_data = $this->mongo_db->order_by(array("index"=>-1))->limit(1)->get($collection);
            $last_data_id = (int)$last_data[0]['index'] + 1;
        } else
            $last_data_id = 100;
        return $last_data_id;
    }

}