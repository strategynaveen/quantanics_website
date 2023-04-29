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
}



?>