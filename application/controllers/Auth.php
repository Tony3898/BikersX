<?php


class Auth extends MY_Controller
{
    public function check_email()
    {
        $postData = $this->input->post();
        $res = $this->mongo_db->where(array("email" => $postData['email']))->get("user");
        if ($res)
            echo "False";
        else
            echo "True";
    }

    public function signin()
    {
        if (!empty($_POST)) {
            $user = array();
            $postData = $this->input->post();
            $user["email"] = $postData["email"];
            $user["password"] = md5($postData["password"]);
            $res = $this->mongo_db->where(array("email" => $user['email'], "password" => $user['password']))->limit(1)->get("user");
            /*print_r($res);
            die();*/
            if ($res) {
                $res = $res[0];
                $sessionData = array('_id' => $res['_id'], 'name' => $res['name'], 'email' => $res['email']);
                $this->session->set_userdata('bikers_logged_id', $sessionData);
                redirect(base_url());
            } else {
                set_msg('error', "Username/password not found");
                redirect(base_url("SignIn"));
            }

        }
    }

    public function signUp()
    {
        if (!empty($_POST)) {
            $user = array();
            $timestamp = time();
            $postData = $this->input->post();
            $index = $this->get_incremental_id("user");
            $user["_id"] = "USR" . $index;
            $user['index'] = $index;
            $user["name"] = $postData["name"];
            $user["email"] = $postData["email"];
            $user["password"] = md5($postData["password"]);
            $user['meta'] = array('created' => $timestamp, 'modified' => $timestamp);

            $res = $this->mongo_db->insert("user", $user);
            if ($res) {
                $sessionData = array('_id' => $user['_id'], 'name' => $user['name'], 'email' => $user['email']);
                $this->session->set_userdata('bikers_logged_id', $sessionData);
                redirect(base_url());
            } else {
                set_msg("error", "User cannot be added");
                redirect(base_url("SignUp"));
            }
        } else {
            redirect(base_url("SignUp"));
        }
    }

    public function signOut()
    {
        $this->session->unset_userdata('bikers_logged_id');
        redirect(base_url());
    }
}