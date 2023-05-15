<?php 


namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;


class Admin_Model extends Model
{
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();

    }


    public function get_particular_record($intern_id){
        $db = \Config\Database::connect();
        $query = $db->table('intern_table as in');
        $query->select('in.*,d.domain_name');
        $query->join('domain_table as d','d.domain_id=in.domain');
        $query->where('intern_id ',$intern_id);
        $res = $query->get()->getResultArray();
        return $res;
    }

    // rejection modal submission
    public function getrejection_status($intern_id,$msg){
        $db = \Config\Database::connect();
        $builder = $db->table('intern_table');
        $builder->set('registeration_status',2);
        $builder->set('reject_reason',$msg);
        $builder->where('intern_id ',$intern_id);
        if ($builder->update()==true) {
            return true;
        }else{
            return false;
        }

      //  return $intern_id;
    }

    //acceptance model submission
    public function get_accept_status($intern_id,$intern_status,$fees){
        $db = \Config\Database::connect();
        $builder = $db->table('intern_table');
        $builder->set('registeration_status',1);
        $builder->set('intern_status ',$intern_status);
        $builder->set('fees',$fees);
        $builder->where('intern_id ',$intern_id);
        $res = $builder->update();
        if($res==true){
            return true;
        }else{
            return false;
        }
    }


    // admin messaging data domain based selection records 
    public function getmessaging_data_particular_domain($domain){
        $db = \Config\Database::connect();
        $tb = $db->table('message_table');
        $tb->select('*');
        $tb->where('mdomain',$domain);
        $tb->where('mstatus!=','0');
        $res = $tb->get()->getResultArray();
        return $res;

    }

    // admin sedn message
    public function insert_msg($mydata){
        $db = \Config\Database::connect();
        $data = [
            "mid" => $mydata['mid'],
            "mname" => $mydata['mname'],
            "msg" => $mydata['msg'],
            "mdomain" => $mydata['mdomain'],
            "mprofile" => $mydata['mprofile'],
            "messager_status" => "admin",
            "mstatus" => 1,
        ];
        $query = $db->table('message_table');
        $res = $query->insert($data);
        if ($res==true) {
            return true;
        }else{
            return false;
        }
        // return $data;
    }

    // invite cards for admin model
    public function admin_data(){
        $this->db = \Config\Database::connect();
        $query = $this->db->table('intern_table as in');
        $query->select('in.*,d.domain_name');
        $query->join('domain_table as d ','d.domain_id = in.domain');
        $query->where('in.registeration_status', '0');
        $res = $query->get()->getResultArray(); 
        return $res;
    }


    // load cartbox domains 
    public function getchartbox_domains(){
        $db = \Config\Database::connect();
        $query = $db->table('domain_table');
        $query->select('*');
        $query->where('domain_status!=','0');
        $result = $query->get()->getResultArray();
        return $result;

    }
}



?>