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
            $email = $this->request->getvar('email');
            $res = $this->datas->get_accept_status($intern_id,$intern_status,$fees);
            // echo json_encode($fees."-".$intern_id);
            if ($res==true) {
              $final_res = $this->accept_mail($email); 
              if ($final_res==true) {
                echo json_encode($res);
              }
            }
           

        }
    }


    public function accept_mail($email){
        $to = $email;
        $sub = 'Request Accept Mail';
        $imgname = base_url()."/assets/base_img/logo1.png";
        $link_url = base_url().'/Home/load_option/intern_login';
        // $imgname = "https://drive.google.com/file/d/1onMA99WKtmtnI1Nlh2juurgYsVI9u9HX/view?usp=sharing";
        $img_name2 = base_url()."/assets/base_img/logo1.png";
        $message = "<div style='font-family:'Helvetica',sans-serif;src:('https://fonts.cdnfonts.com/css/helvetica-255');display: flex; flex-direction: column; margin: 50px; align-items: center;>
            <div style='display:flex; width: 500px; height: 150px; background-color: #004591; padding: 20px; vertical-align: middle; align-items: center;margin:auto;'>
                <img src='".$imgname."' alt='SmartMach Logo' style='width: 40%; vertical-align: middle; margin-left: auto; margin-right: auto;height:fit-content;margin:auto;'>
            </div>
            <div style=''>
                <div style='margin-top: 20px; margin-bottom: 20px; margin-block-end:auto;text-align:center; font-size: 1.4rem; font-weight: bold; color: #434C5D; align-items: center;'>
                    We are excited to have you onboard
                </div>
                <div style='font-size: 0.9rem; color: #434C5D; align-items:center; margin:auto;text-align:center'>
                    Please verify your account to use SmartMach product.
                </div>
                <div style='display:flex;justify-content:center;'>
                <a href='".$link_url."' target='_blank' style='background-color: #2563EB;margin:auto; font-size: 0.9rem; color: #fff; padding: 15px 40px; border-radius: 3px; margin-top: 40px; margin-bottom: 40px; text-decoration: none;' user_name='".$uName."' user_id='".$uId."'>
                    VERIFY
                </a>
                </div>
                <div style='font-size: 0.75rem; color: #7F7F7F; align-items: center; text-align:center; margin-top:20px;'>
                    This is an auto generated message. Please do not reply to this email.
                </div>
                <div style='display: flex; vertical-align: middle; margin-top: 5px; margin:auto;'>
                    <div style='font-size: 0.75rem; color: #7F7F7F; align-items: center; vertical-align: middle;margin:auto;'>
                        Powered by <img src='".$img_name2."' alt='Smartories logo' height='40px' style='vertical-align: middle;margin:auto;'>
                    </div>
                </div>             
            </div>         
            </div>";
        $email = \Config\Services::email();
        // old code
        // $message = 'Hi <b><i>'.$fName.' '.$lName.'</i></b>,
        //             <br>Your account has been created successfully as a <b><i>'.$role.'</i></b>. Please click the link below to activate your account and set the password.
        //             <br>
        //                 <a href="'.base_url().'/Login/createPassword/'.$uName.'" user_name="'.$uName.'" user_id="'.$uId.'">Activate and Set Password</a>
        //             <br><b>Thank You</b>';
        // $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('naveenkumarnk18420@gmail.com');
        $email->setSubject($sub);
        $email->setMessage($message);
        if($email->send()){
            return true;
        }
        else{
            return false;
        }
    }


    // rejection submission function
    public function rejection_con(){
        if($this->request->isAJAX()){
            $intern_id = $this->request->getvar('intern_id');
            $rejection_msg = $this->request->getvar('reject_msg');
            $email = $this->request->getvar('email');
            $result = $this->datas->getrejection_status($intern_id,$rejection_msg);
            if ($result == true) {
                $final_res = $this->rejection_mail($email);
                if ($final_res==true) {
                    echo json_encode($result);
                }
            }
           
        }
    }

    // rejection mail function
    public function rejection_mail($email){
        $to = $email;
        $sub = 'Request Rejection Mail';
        $imgname = base_url()."/assets/base_img/logo1.png";
        $link_url = base_url().'/Home/load_option/intern_login';
        // $imgname = "https://drive.google.com/file/d/1onMA99WKtmtnI1Nlh2juurgYsVI9u9HX/view?usp=sharing";
        $img_name2 = base_url()."/assets/base_img/logo1.png";
        $message = "<div style='font-family:'Helvetica',sans-serif;src:('https://fonts.cdnfonts.com/css/helvetica-255');display: flex; flex-direction: column; margin: 50px; align-items: center;>
            <div style='display:flex; width: 500px; height: 150px; background-color: #004591; padding: 20px; vertical-align: middle; align-items: center;margin:auto;'>
                <img src='".$imgname."' alt='SmartMach Logo' style='width: 40%; vertical-align: middle; margin-left: auto; margin-right: auto;height:fit-content;margin:auto;'>
            </div>
            <div style=''>
                <div style='margin-top: 20px; margin-bottom: 20px; margin-block-end:auto;text-align:center; font-size: 1.4rem; font-weight: bold; color: #434C5D; align-items: center;'>
                    We are excited to have you onboard
                </div>
                <div style='font-size: 0.9rem; color: #434C5D; align-items:center; margin:auto;text-align:center'>
                    Please verify your account to use SmartMach product.
                </div>
                <div style='display:flex;justify-content:center;'>
                <a href='".$link_url."' target='_blank' style='background-color: #2563EB;margin:auto; font-size: 0.9rem; color: #fff; padding: 15px 40px; border-radius: 3px; margin-top: 40px; margin-bottom: 40px; text-decoration: none;' user_name='".$uName."' user_id='".$uId."'>
                    VERIFY
                </a>
                </div>
                <div style='font-size: 0.75rem; color: #7F7F7F; align-items: center; text-align:center; margin-top:20px;'>
                    This is an auto generated message. Please do not reply to this email.
                </div>
                <div style='display: flex; vertical-align: middle; margin-top: 5px; margin:auto;'>
                    <div style='font-size: 0.75rem; color: #7F7F7F; align-items: center; vertical-align: middle;margin:auto;'>
                        Powered by <img src='".$img_name2."' alt='Smartories logo' height='40px' style='vertical-align: middle;margin:auto;'>
                    </div>
                </div>             
            </div>         
            </div>";
        $email = \Config\Services::email();
        // old code
        // $message = 'Hi <b><i>'.$fName.' '.$lName.'</i></b>,
        //             <br>Your account has been created successfully as a <b><i>'.$role.'</i></b>. Please click the link below to activate your account and set the password.
        //             <br>
        //                 <a href="'.base_url().'/Login/createPassword/'.$uName.'" user_name="'.$uName.'" user_id="'.$uId.'">Activate and Set Password</a>
        //             <br><b>Thank You</b>';
        // $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('naveenkumarnk18420@gmail.com');
        $email->setSubject($sub);
        $email->setMessage($message);
        if($email->send()){
            return true;
        }
        else{
            return false;
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

    // send message function
    public function send_message(){
        if ($this->request->isAJAX()) {
            $user_id = $this->request->getvar('emp_id');
            $emp_name = $this->request->getvar('emp_name');
            $profile = $this->request->getvar('profile');
            $domain = $this->request->getvar('domain');
            $msg = $this->request->getvar('msg');

            $tmp['mid'] = $user_id;
            $tmp['mname'] = $emp_name;
            $tmp['mprofile'] = "empty";
            $tmp['mdomain'] = $domain;
            $tmp['msg'] = $msg;


            $res = $this->datas->insert_msg($tmp);
            echo  json_encode($res);

        }
    }

    // invite cards
    public function fetch_user_data(){
        // echo json_encode("hi");
        if ($this->request->isAJAX()) {
            $res=$this->datas->admin_data();
            echo json_encode($res);
        }

    }

    // load chartbox domains
    public function load_domains(){
        if ($this->request->isAJAX()) {
            $res = $this->datas->getchartbox_domains();

            echo json_encode($res);
        }
    }
}



?>