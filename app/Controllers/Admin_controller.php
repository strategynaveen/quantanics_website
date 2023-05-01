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

    // rejection submission function
    public function rejection_con(){
        if($this->request->isAJAX()){
            $intern_id = $this->request->getvar('intern_id');
            $rejection_msg = $this->request->getvar('reject_msg');
            $result = $this->datas->getrejection_status($intern_id,$rejection_msg);
            echo json_encode($result);
        }
    }
}



?>