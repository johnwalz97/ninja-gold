<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("America/Los_Angeles");

class Gold extends CI_Controller {
    public function index(){
        if(empty($this->session->userdata("gold_count"))){
            $this->session->set_userdata("gold_count", 0);
        }
        if(empty($this->session->userdata("activities"))){
            $this->session->set_userdata("activities", array());
        }
        $this->load->view('NinjaGold');
    }
    
    public function farm(){
        $activities = $this->session->userdata('activities');
        $rand = rand(10, 20);
        $rand1 = $this->session->userdata('gold_count') + $rand;
        $this->session->set_userdata('gold_count', $rand1);
        $activities[] = "You entered a farm and earned $rand golds(".date("F d, Y h:i a").")&#013;&#010";
        $this->session->set_userdata('activities', $activities);
        redirect("/");
    }
    public function cave(){
        $activities = $this->session->userdata('activities');
        $rand = rand(5, 10);
        $rand2 = $this->session->userdata('gold_count') + $rand;
        $this->session->set_userdata('gold_count', $rand2);
        $activities[] = "You entered a cave and earned $rand golds(".date("F d, Y h:i a").")&#013;&#010";
        $this->session->set_userdata('activities', $activities);
        redirect("/");
    }
    public function house(){
        $activities = $this->session->userdata('activities');
        $rand = rand(2, 5);
        $rand3 = $this->session->userdata('gold_count') + $rand;
        $this->session->set_userdata('gold_count', $rand3);
        $activities[] = "You entered a house and earned $rand golds(".date("F d, Y h:i a").")&#013;&#010";
        $this->session->set_userdata('activities', $activities);
        redirect("/");
    }
    public function casino(){
        $activities = $this->session->userdata('activities');
        $rand = rand(-50, 50);
        $rand4 = $this->session->userdata('gold_count') + $rand;
        $this->session->set_userdata('gold_count', $rand4);
        $rand < 0?$action = "lost":$action = "earned";
        if ($action == "lost"){$rand = abs($rand);}
        $activities[] = "You entered a casino and $action $rand golds(".date("F d, Y h:i a").")&#013;&#010";
        $this->session->set_userdata('activities', $activities);
        redirect("/");
    }
    public function restart(){
        $this->session->sess_destroy();
        redirect("/");
    }
}

?>