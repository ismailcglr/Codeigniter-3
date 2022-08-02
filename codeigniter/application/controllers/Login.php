<?php
class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view("admin/login");

        if ($this->session->userdata("oturum")){
            redirect(base_url("anasayfa/genel"));
        }
    }

    public function logindata(){
        if ($this->input->method() == "post"){
            $this->form_validation->set_rules("sifre","Şifreniz","trim|required");
            $this->form_validation->set_rules("eposta","E-posta adresi","trim|required|valid_email");
            if ($this->form_validation->run() == FALSE){
                echo validation_errors();
            }else{
                $sifreGet=$this->input->post("sifre",true);
                $emailGet=$this->input->post("eposta",true);
                $loginArr=array(
                    "sifre"=>sha1(md5($sifreGet)),
                    "eposta"=>$emailGet
                );
                $query=$this->common_model->get($loginArr,'uyeler');
                if ($query){
                    $this->session->set_userdata([
                        "oturum" => true,
                        "id"     => $query->id,
                        "kadi"   => $query->kadi,
                        "eposta" => $query->eposta
                    ]);
                    redirect(base_url("yonetim"));
                }else{
                    redirect(base_url("login"));
                }
            }

        }
    }
}