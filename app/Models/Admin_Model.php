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
        $query = $db->table('intern_table');
        $query->select('*');
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
        $builder->where('intern_id ',$intern_id);
        $builder->set('intern_status ',$intern_status);
        $builder->set('fees ',$fees);
        if($builder->update()==true){
            return true;
        }else{
            return false;
        }
    }
}



?>