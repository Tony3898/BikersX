<?php


class Profile extends MY_Controller
{
    public function user_profile()
    {
        redirect(base_url('SignIn'));
    }
}