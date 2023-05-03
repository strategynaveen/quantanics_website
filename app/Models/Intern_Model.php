<?php


namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;


class Intern_Model extends Model
{
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();

    }

    public function get_intern_id()
    {
        $db = \Config\Database::connect();
        $query = $db->table('intern_table');
        $query->select('*');
        $res = $query->get()->getResultArray();

        if (count($res) > 0) {
            $intern_id = 1001 + count($res);
        } else {
            $intern_id = 1001;
        }

        return $intern_id;
    }


    public function insert_intern_record($tmp)
    {
        $db = \Config\Database::connect();
        $data = [
            "intern_id" => $tmp['intern_id'],
            "regno" => $tmp['regno'],
            "sname" => $tmp['sname'],
            "dept" => $tmp['dept'],
            "year" => $tmp['year'],
            "email_id" => $tmp['email_id'],
            "clg_name" => $tmp['clg_name'],
            "mobile" => $tmp['mobile'],
            "resume" => $tmp['resume'],
            "bonafide" => $tmp['bonafide'],
            "id_card" => $tmp['id_card'],
            "profile" => $tmp['profile'],
            "start_date" => $tmp['sdate'],
            "end_date" => $tmp['edate'],
            "domain" => $tmp['domain'],
            "dob" => $tmp['dob'],
        ];

        $query = $db->table('intern_table');
        $res = $query->insert($data);

        if ($res == true) {
            return true;
        } else {
            return false;
        }
        // return $tmp;
    }


    // intern login
    public function login_intern($regno, $dob)
    {
        $db = \Config\Database::connect();


        $query = $db->table('intern_table');
        $query->select('*');
        $query->where('regno', $regno);
        $query->where('dob', $dob);
        $res = $query->get()->getResultArray();

        if (count($res) > 0) {
            if ($res[0]['registeration_status'] == 1) {
                $this->session->set('intern_id', $res[0]['intern_id']);
                return "success";

            } else if($res[0]['registeration_status'] == 0) {
                return "waiting";
            }else{
                return "rejection";
            }
        } else {
            return "new";
        }
    }






    // get intern data
    public function getintern_data($intern_id)
    {
        $db = \Config\Database::connect();

        $query = $db->table('intern_table');
        $query->select('*');
        $query->where('intern_id', $intern_id);
        $result = $query->get()->getResultArray();


        return $result;
    }

    // intern message
    public function insert_msg($mydata)
    {
        $db = \Config\Database::connect();

        $my_demo_data = [
            "intern_id" => $mydata['intern_id'],
            "intern_name" => $mydata['intern_name'],
            "intern_msg" => $mydata['intern_msg'],
            "domain_name" => $mydata['domain'],
            "profile_name" => $mydata['profile_name'],
        ];

        $query = $db->table('message_table');
        $res = $query->insert($my_demo_data);

        if ($res == true) {
            return true;
        } else {
            return false;
        }


    }


    // intern message retrive function
    public function get_intern_msg_records()
    {
        $db = \Config\Database::connect();
        $query = $db->table('message_table');
        $query->select('*');
        $res = $query->get()->getResultArray();

        return $res;


    }
    public function insert_task_table($task_data)
    {
        $db = \Config\Database::connect();
        $query = $db->table('task_table');
        $res = $query->insert($task_data);
        if ($res == true) {
            return true;
        } else {
            return false;
        }
        // return $task_data;
    }


    // admin login
    public function admin_intern_model($user_id, $password)
    {
        $db = \Config\Database::connect();

        $query = $db->table('admin_user');
        $query->select('*');
        $query->where('user_id', $user_id);
        $query->where('password', $password);
        $res = $query->get()->getResultArray();


        if ($res == true) {
            $this->session->set('admin_id', $res[0]['user_id']);
            return "success";
        } else {
            return "new";
        }
    }

    // invite cards for admin model
    public function admin_data(){
        $this->db = \Config\Database::connect();
        $query = $this->db->table('intern_table');
        $query->where('registeration_status', '0');
        $res = $query->get()->getResultArray(); 
        return $res;
    }

    // fetch data
    public function fetchData($id)
    {
        $this->db = \Config\Database::connect();
        $query = $this->db->table('task_table as t');
        $query->select('t.*,s.emp_name');
        $query->join('admin_user as s','s.user_id=t.assigned_by');
        $query->where('t.intern_id', $id);
        $res = $query->get()->getResultArray(); //->where('id', $id)->get();
        
        return $res;
    }


    // assigned tasks get function
    public function getassigned_tasks($intern_id){
        $this->db = \Config\Database::connect();
        $query = $this->db->table('task_table');
        $query->select('id,task,assigned_by');
        $query->where('task_status!=','submitted');
        $query->where('task_status!=','completed');
        $res = $query->get()->getResultArray();
        return $res;

    }

    // get assignee array
    public function get_assignees(){
        $this->db = \Config\Database::connect();
        $build = $this->db->table('admin_user');
        $build->select('*');
        $res = $build->get()->getResultArray();

        return $res;
    }


    // get assigned task and assigned person id
    public function get_task($tid){
        $this->db = \Config\Database::connect();
        $build = $this->db->table('task_table');
        $build->select('task,assigned_by');
        $build->where('id',$tid);
        $res = $build->get()->getResultArray();

        return $res;
    }

    // payment function
    public function get_payment_data($intern_id){
        $this->db = \Config\Database::connect();
        $build = $this->db->table('payment_table');
        $build->select('*');
        $build->where('intern_id',$intern_id);
        $res = $build->get()->getResultArray();

        $final_arr = [];
        if (count($res)>0) {
            $final_arr['total_payment'] = $res[0]['total_payment'];
            $payment_count = 0;
            foreach ($res as $key => $value) {
                $payment_count = $payment_count + $value['paid_amount'];

            }
            $final_arr['paid_amount'] = $payment_count;
            $final_arr['remaining_amount'] = $res[0]['total_payment'] - $payment_count; 
        }else{
            // $result_arr = $this->getintern_data($intern_id);
            $final_arr['total_payment'] = 0;
            $final_arr['remaining_amount'] = 0;
            $final_arr['paid_amount'] = 0;
        }
        return $final_arr;
    }


    // payment insertion 
    public function insert_payment_record($mydata){
        $this->db = \Config\Database::connect();
        $build = $this->db->table('payment_table');
        $build->select('*');
        $build->where('intern_id',$mydata['intern_id']);
        $res = $build->get()->getResultArray();
        
        
        $total_amount = 0;
        if (count($res)>0) {
            $total_amount = $res[0]['total_payment'];
        }else{
            $query = $this->db->table('intern_table');
            $query->select('*');
            $query->where('intern_id',$mydata['intern_id']);
            $result = $query->get()->getResultArray();
            $total_amount = $result[0]['fees'];
        }
        

        $remaining_amount = $total_amount - $mydata['paid_amount'];
        // return $remaining_amount;
        $insert_data = [
            "intern_id" => $mydata['intern_id'],
            "paid_amount"   => $mydata['paid_amount'],
            "remaining_amount" => $remaining_amount,
            "total_payment" =>  $total_amount,
            "payment_proof" =>  $mydata['proof_name']
        ];

        $query = $this->db->table('payment_table');
        $res = $query->insert($insert_data);
        if ($res == true) {
            return true;
        } else {
            return false;
        }
    }

}
