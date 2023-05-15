<?php

namespace App\Controllers;
use App\Models\Intern_Model;
use CodeIgniter\CLI\Console;


class Intern_controller extends BaseController
{

    protected $datas;
    protected $session;
    
    public function __construct(){
        $this->session = \Config\Services::session();
        $this->datas = new Intern_Model();
    }

    public function generate_intern_id(){
        // $data = new Intern_Model();
        $ex_id = $this->datas->get_intern_id();
        $ex_id = 'QAIN'.$ex_id;
        return $ex_id;
    }
   
   
/* temporary hide this registeration
    public function demo_reg(){
        helper(['filesystem']);

        $regno = $this->request->getvar('reg_no');
        $sname = $this->request->getvar('sname');
        $dept = $this->request->getvar('dept');
        $email_id = $this->request->getvar('email_id');
        $year = $this->request->getvar('year');
        $mobile = $this->request->getvar('mobile');
        $clg_name = $this->request->getvar('clg_name');
        $sdate = $this->request->getvar('sdate');
        $edate = $this->request->getvar('edate');
        $domain = $this->request->getvar('domain');
        $dob = $this->request->getvar('dob');


        $resume = $this->request->getFile('resume_file');
        $bonafide = $this->request->getFile('bonafide_check_file');
        $id_card = $this->request->getFile('id_card_file');
        $profile = $this->request->getFile('profile_file');

        if(($resume->getSize()>0)){
            // if(($resume->isValid()) && ($profile->isValid()) && ($bonafide->isValid()) && ($id_card->isValid())) {
                // echo "ok";

                $intern_id = $this->generate_intern_id();
                $directory = "./public/uploads/".$intern_id;
                if (!is_dir($directory)) {
                    mkdir($directory, 0777, TRUE);

                }


                $resume_name = $resume->getName();
                $profile_name = $profile->getName();
                $id_card_name = $id_card->getName();
                $bonafide_name = $bonafide->getName();

                $tmp['resume'] = $resume_name;
                $tmp['profile'] = $profile_name;
                $tmp['id_card'] = $id_card_name;
                $tmp['bonafide'] = $bonafide_name;

                $tmp['regno'] = $regno;
                $tmp['sname'] = $sname;
                $tmp['dept'] = $dept;
                $tmp['year'] = $year;
                $tmp['intern_id'] = $intern_id;
                $tmp['email_id'] = $email_id;
                $tmp['mobile'] = $mobile;
                $tmp['clg_name'] = $clg_name;
                $tmp['sdate'] = $sdate;
                $tmp['edate'] = $edate;
                $tmp['domain'] = $domain;
                $tmp['dob'] = $dob;

                // print_r($_FILES['bonafide_check_file']);
                // resume images
                if ($resume->isValid() && ! $resume->hasMoved()) {
                  
                    $resume->move($directory);
                    // profile image
                    if ($profile->isValid()) {
                       
                        $profile->move($directory);
                        // id cad image
                        if ($id_card->isValid()) {
                            $id_card->move($directory);
                            // bonafide image
                            if ($bonafide->isValid()) {
                                $bonafide->move($directory);
                                // echo " Images Moved".$resume_name.' '.;
                                // print_r($tmp);
                                // echo $directory;

                                $res = $this->datas->insert_intern_record($tmp);
                                // echo "successfully insertion ".$res;
                                if ($res ==true) {
                                    return view('login');
                                }

                            }
                           
                        }
                    }
                }

        }
       
        
    }
*/

    // intern register new
    public function domain_load(){
        if ($this->request->isAJAX()) {
            $res_drp = $this->datas->getdomain_data();
            echo json_encode($res_drp);
        }
    }

    // intern registeration function
    public function intern_reg(){
        if ($this->request->isAJAX()) {
            $intern_name = $this->request->getvar('intern_name');
            $email = $this->request->getvar('email');
            $mobile = $this->request->getvar('mobile');
            $dept = $this->request->getvar('dept');
            $clg_name = $this->request->getvar('clg_name');
            $year = $this->request->getvar('year');
            $dob = $this->request->getvar('dob');
            $domain = $this->request->getvar('domain');

            $intern_reg['intern_id'] = $this->generate_intern_id();
            $intern_reg['in_name'] = $intern_name;
            $intern_reg['email'] = $email;
            $intern_reg['mobile'] = $mobile;
            $intern_reg['dept'] = $dept;
            $intern_reg['clg_name'] = $clg_name;
            $intern_reg['year'] = $year;
            $intern_reg['dob'] = $dob;
            $intern_reg['domain'] = $domain;
            $intern_reg['profile'] = "empty";
            $res = $this->datas->intern_registeration($intern_reg);
            echo  json_encode($res);


        }
    }

    // intern login
    public function intern_login(){
        // ajax request 
        if ($this->request->isAJAX()) {
            $email = $this->request->getvar('email');
            $dob = $this->request->getvar('dob');

            $res = $this->datas->login_intern($email,$dob);
            // if ($res == "success") {
            //     $this->session->set('intern')
            // }

            echo json_encode($res);
        }
    }



    // intern home page ajax
    public function getdata(){
        if ($this->request->isAJAX()) {
            $intern_id  = $this->request->getvar('intern_id');

            $res = $this->datas->getintern_data($intern_id);

            $assigned_tasks = $this->datas->getassigned_tasks($intern_id);
            $assignee_arr = $this->datas->get_assignees();
            $payment_data = $this->datas->get_payment_data($intern_id);

            $final_arr['profile_record'] = $res;
            $final_arr['assigned_task'] = $assigned_tasks;
            $final_arr['assignee_arr'] = $assignee_arr;
            if ($payment_data['total_payment']==0) {
                $payment_data['total_payment'] = $res[0]['fees'];
                $payment_data['remaining_amount'] = $res[0]['fees'];
            }
            $final_arr['payment_data'] = $payment_data;
            echo json_encode($final_arr);
        }
    }


    // message sending onclick
    public function msg_send(){
        if ($this->request->isAJAX()) {
            $intern_id = $this->request->getvar('intern_id');
            $intern_name = $this->request->getvar('intern_name');
            $domain = $this->request->getvar('domain');
            $profile_name = $this->request->getvar('profile_name');
            $intern_msg = $this->request->getvar('intern_msg');

            $mydata['intern_id'] = $intern_id;
            $mydata['intern_name'] = $intern_name;
            $mydata['domain'] = $domain;
            $mydata['profile_name'] = $profile_name;
            $mydata['intern_msg']   = $intern_msg;
            // $mydata['intern_id'] = "QAIN1001";
            // $mydata['intern_name'] = "strategistnaveen";
            // $mydata['domain'] = "Web";
            // $mydata['profile_name'] = "logo_old.png";
            // $mydata['intern_msg']   = "hi";

            $res = $this->datas->insert_msg($mydata);
            echo json_encode($res);

        }
    }

    public function intern_msg_retrive(){
        if ($this->request->isAJAX()) {
            $result = $this->datas->get_intern_msg_records();
            echo json_encode($result);
        }
    }
   
    public function today_task(){
        // console.log("hai");
        if ($this->request->isAJAX()) {
            $task_data['intern_id']= $this->request->getvar('intern_id');
            $task_data['check_in']= $this->request->getvar('check_in');
            $task_data['check_out'] = $this->request->getvar('check_out');
            $task_data['task_desc'] = $this->request->getvar('Description');
            $task_data['task_status'] = $this->request->getvar('Status');
            $task_data['domain'] = $this->request->getvar('domain');
            $tmp_assignee = $this->request->getvar('tmp_assignee');
            if ($tmp_assignee == "empty") {
                $task_id = $this->request->getvar('tmp_task_id');
                $task = $this->datas->get_task($task_id);
                $task_text = $task[0]['task'];
                $task_assignee = $task[0]['assigned_by'];

            }
            elseif ($tmp_assignee!="empty") {
                $task_text = $this->request->getvar('task1');
                $task_assignee = $tmp_assignee;
            }

            $task_data['task'] = $task_text;
            $task_data['assigned_by'] = $task_assignee;
            $task_data['tdate'] = date('Y-m-d');
            $task_data['last_updated_by'] = $this->request->getvar('intern_id');


            if ($task_data['task_status'] != "submitted") {
                // $task_link = "empty";
                $res = $this->datas->insert_task_table($task_data);
            }else{
                $task_data['completion_file'] = $this->request->getvar('file_link');
                $res = $this->datas->insert_task_table($task_data);
                // $task_link = $this->request->getvar('file_link');
            }

          
            // $res = $this->datas->insert_task_table($task_data);
            echo json_encode($res);
        }
    }
    //admin login
    public function admin_login(){
        // ajax request 
        if ($this->request->isAJAX()) {
            $user_id = $this->request->getvar('user_id');
            $password = $this->request->getvar('password');

            $res = $this->datas->admin_intern_model($user_id,$password);
            // if ($res == "success") {
            //     $this->session->set('admin')
            // }

            echo json_encode($res);
        }
    }

  
    // fetch data
    public function fetch_data(){
        // if ($this->request->isAJAX()){
        //     json_encode("hai");
        // }
        $id = $this->request->getvar('intern_id');
        $res = $this->datas->fetchData($id);
        echo json_encode($res);
    }

    // 
    public function payment_submit_fun(){
        // if ($this->request->isAJAX()) {
            // echo json_encode('heelo naveen');
            helper(['filesystem']);
            $paid_amount = $this->request->getvar('paid_amount');
            $file = $this->request->getFile('file');
            $intern_id = $this->request->getvar('intern_id');
           
            if ($file->getSize() > 0) {
               
                if ($file->isValid()) {
                    $directory = "./public/uploads/".$intern_id;
                    if (!is_dir($directory)) {
                        mkdir($directory, 0777, TRUE);
                    }

                    $payment_proof_name = $file->getName();
                    $temp['intern_id'] = $intern_id;
                    $temp['proof_name'] = $payment_proof_name;
                    $temp['paid_amount'] = $paid_amount;
                    $file->move($directory);
                    $res = $this->datas->insert_payment_record($temp);
                    // print_r($res);
                    echo  $res;
                    
                    
                    
                }
            }

        // }
    }

}
