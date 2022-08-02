<?php
class Register extends CI_Controller{
    public function index(){
        $this->load->view("admin/kayit");
    }
    public function registerdata(){
        if ($this->input->method()=="post"){
            $this->form_validation->set_rules("kadi","Kullanıcı adı","trim|required");
            $this->form_validation->set_rules("sifre","Şifreniz","trim|required");
            $this->form_validation->set_rules("eposta","E-posta adresi","trim|required|is_unique[uyeler.eposta]|valid_email");

            if ($this->form_validation->run()==FALSE){
                echo validation_errors();
            }else{
                $data=array(
                    "kadi"=>$this->input->post("kadi",true),
                    "eposta"=>$this->input->post("eposta",true),
                    "sifre"=>sha1(md5($this->input->post("sifre",true)))
                );
                $ekle=$this->common_model->addata("uyeler",$data);
                if ($ekle){
                    redirect(base_url("login"));
                }else{
                    echo "hata oluştu";
                }

            }
        }
    }
}