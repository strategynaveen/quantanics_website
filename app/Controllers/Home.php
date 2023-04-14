<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home');
    }


    public function load_option($name){
        if ($name=="about") {
            return view('about');
        }
        elseif ($name=="index") {
            return view('Home');
        }
        elseif ($name=="iotservice") {
            return view('iotservice');
        }
        elseif ($name=="customersupport") {
            return view('customersupport');
        }
        elseif ($name=="productdev") {
            return view('productdev');
        }
        elseif ($name=="Etap") {
            return view('Etap');
        }
        elseif ($name=="client") {
            return view('client');
        }
        elseif ($name=="contact") {
            return view('contact');
        }
        elseif ($name=="work") {
            return view('work');
        }
        elseif ($name == "intern_login") {
            return view("login");
        }
        elseif ($name == "intern_register") {
            return view("Intern_register");
            // return "hello";
        }
        elseif($name == "intern_after"){
            return view("Intern_Home");
        }
        elseif($name == "card_show_more"){
            return view("card_show_more");
        }
  
        // echo "navigation link";
    }
    // public function after_login(){
    //     return view("Intern_Home");
    // }
    // public function card_show_more(){
    //     return view("card_show_more");
    // }
}
