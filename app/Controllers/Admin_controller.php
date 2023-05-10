<?php 



namespace App\Controllers;
use App\Models\Admin_Model;
use CodeIgniter\CLI\Console;


class Admin_controller extends BaseController
{

    protected $datas;
    protected $session;
    
    public function __construct(){
        $this->session = \Config\Services::session();
        $this->datas = new Admin_Model();
    }


    public function get_intern_data(){
        if ($this->request->isAJAX()) {
            $intern_id = $this->request->getvar('intern_id');
            $res = $this->datas->get_particular_record($intern_id);
            echo json_encode($res);
        }
    }

    //accept submission function
    public function  accept_con(){
        if($this->request->isAJAX()){
            $intern_id = $this->request->getvar('intern_id');
            $intern_status = $this->request->getvar('intern_status');
            $fees = $this->request->getVar('fees');
            $res = $this->datas->get_accept_status($intern_id,$intern_status,$fees);
            // echo json_encode($fees."-".$intern_id);
            echo json_encode($res);

        }
    }



    // rejection submission function
    public function rejection_con(){
        if($this->request->isAJAX()){
            $intern_id = $this->request->getvar('intern_id');
            $rejection_msg = $this->request->getvar('reject_msg');
            $result = $this->datas->getrejection_status($intern_id,$rejection_msg);
            echo json_encode($result);
        }
    }


    // get message domain function
    public function get_message_data(){
        if ($this->request->isAJAX()) {
            $domain = $this->request->getVar('message_domain');
            $final_res = $this->datas->getmessaging_data_particular_domain($domain);
            echo json_encode($final_res);
        }
    }
}



?>