<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("oturum")){
            redirect(base_url("giris"));
        }
    }

    public function index(){
        $ad = $this->session->userdata("id");
        $data["kadi"]=$this->db->select("*")->from("uyeler")->where("id",$ad)->get()->row();
        $this->load->view("admin/header",$data);
        $this->load->view('admin/management',$data);
        $this->load->view('admin/footer');
    }

    public function anasayfa(){
        $ad = $this->session->userdata("id");
        $data["kadi"]=$this->db->select("*")->from("uyeler")->where("id",$ad)->get()->row();
        $this->load->view("admin/header",$data);
        $this->load->view('admin/anasayfa_ayar',$data);
        $this->load->view("admin/footer");
    }

    public function profil(){
        $data["rows"]=$this->db->select("*")->from("uyeler")->where("id",$this->session->userdata("id"))->get()->row();
        $ad = $this->session->userdata("id");
        $data["kadi"]=$this->db->select("*")->from("uyeler")->where("id",$ad)->get()->row();
        $this->load->view("admin/header",$data);
        $this->load->view("admin/profil_ayar",$data);
        $this->load->view("admin/footer");
        if (isset($_POST) && !empty($_POST)){
            $kadi=$this->input->post("kadi");
            $eposta=$this->input->post("eposta");
            $sifre=$this->input->post("sifre");
            if (!empty($sifre)){
                $data=array(
                    "kadi"=>$kadi,
                    "eposta"=>$eposta,
                    "sifre"=>sha1(md5($sifre))
                );
            }else{
                $data=array(
                    "kadi"=>$kadi,
                    "eposta"=>$eposta,
                );
            }
            $this->db->update("uyeler",$data);

        }
    }

    public function iletisim(){
        $data["rows"]=$this->db->select("*")->from("iletisim_ayar")->where("iletisim_id",1)->limit(1)->get()->row();
        if(isset($_POST) && !empty($_POST)){
            $baslik=$this->input->post("baslik");
            $aciklama=$this->input->post("aciklama");
            $metin=$this->input->post("metin");
            $kaydet=array(
                "iletisim_baslik"=>$baslik,
                "iletisim_aciklama"=>$aciklama,
                "iletisim_metin"=>$metin
            );
            $this->db->where('iletisim_id', 1);
            $this->db->update('iletisim_ayar', $kaydet);
        }
        $ad = $this->session->userdata("id");
        $data["kadi"]=$this->db->select("*")->from("uyeler")->where("id",$ad)->get()->row();
        $this->load->view("admin/header",$data);
        $this->load->view('admin/iletisim_ayar',$data);
        $this->load->view("admin/footer");
    }

    public function haber(){
        $data["rows"]=$this->db->select("*")->from("haber_ayar")->where("haber_id",1)->get()->row();
        $ad = $this->session->userdata("id");
        $data["kadi"]=$this->db->select("*")->from("uyeler")->where("id",$ad)->get()->row();
        $this->load->view("admin/header",$data);
        $this->load->view('admin/haber_ayar',$data);
        $this->load->view("admin/footer");
        if(isset($_POST) && !empty($_POST)){
            $baslik=$this->input->post("baslik");
            $aciklama=$this->input->post("aciklama");
            $haber1=$this->input->post("haber1");
            $aciklama1=$this->input->post("aciklama1");
            $haber2=$this->input->post("haber2");
            $aciklama2=$this->input->post("aciklama2");
            $haber3=$this->input->post("haber3");
            $aciklama3=$this->input->post("aciklama3");
            $data2=array(
                "haber_baslik"=>$baslik,
                "haber_aciklama"=>$aciklama,
                "haber_haber1"=>$haber1,
                "haber_aciklama1"=>$aciklama1,
                "haber_haber2"=>$haber2,
                "haber_aciklama2"=>$aciklama2,
                "haber_haber3"=>$haber3,
                "haber_aciklama3"=>$aciklama3
            );
            $this->db->where('haber_id', 1);
            $this->db->update('haber_ayar', $data2);
        }
    }

    public function hakkimda(){
        $data["rows"]=$this->db->select("*")->from("hakkimda_ayar")->where("hakkimda_id",1)->get()->row();
        $ad = $this->session->userdata("id");
        $data["kadi"]=$this->db->select("*")->from("uyeler")->where("id",$ad)->get()->row();
        $this->load->view("admin/header",$data);
        $this->load->view('admin/hakkimda_ayar',$data);
        $this->load->view("admin/footer");
        if(isset($_POST) && !empty($_POST)){
            $baslik=$this->input->post("baslik");
            $aciklama=$this->input->post("aciklama");
            $metin=$this->input->post("metin");
            $metin2=$this->input->post("metin2");
            $metin3=$this->input->post("metin3");
            $data2=array(
                "hakkimda_baslik"=>$baslik,
                "hakkimda_aciklama"=>$aciklama,
                "hakkimda_metin"=>$metin,
                "hakkimda_metin2"=>$metin2,
                "hakkimda_metin3"=>$metin3,
            );
            $this->db->where('hakkimda_id', 1);
            $this->db->update('hakkimda_ayar', $data2);
        }
    }

    public function genel(){
        $data["rows"]=$this->db->select("*")->from("genel_ayar")->where("genel_id",1)->limit(1)->get()->row();
        $ad = $this->session->userdata("id");
        $data["kadi"]=$this->db->select("*")->from("uyeler")->where("id",$ad)->get()->row();
        $this->load->view("admin/header",$data);
        $this->load->view('admin/genel_ayar',$data);
        $this->load->view("admin/footer");
        if(isset($_POST) && !empty($_POST)){
            $site=$this->input->post("site");
            $baslik=$this->input->post("baslik");
            $aciklama=$this->input->post("aciklama");
            $ins=$this->input->post("ins");
            $fac=$this->input->post("fac");
            $gog=$this->input->post("gog");
            $git=$this->input->post("git");
            $data2=array(
                "genel_site"=>$site,
                "genel_anasayfa_baslik"=>$baslik,
                "genel_anasayfa_aciklama"=>$aciklama,
                "genel_ins"=>$ins,
                "genel_fac"=>$fac,
                "genel_gog"=>$gog,
                "genel_git"=>$git
            );
            $this->db->where('genel_id', 1);
            $this->db->update('genel_ayar', $data2);
        }
    }

    public function resim(){
        $ad = $this->session->userdata("id");
        $data["kadi"]=$this->db->select("*")->from("uyeler")->where("id",$ad)->get()->row();
        $data["images"]=$this->db->select("*")->from("resim_ayar")->where("resim_id",1)->get()->row();
        $this->load->view("admin/header",$data);
        $this->load->view("admin/resim_yukle",$data);
        $this->load->view('admin/footer');
        $config['upload_path'] = 'uploads_image/';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $getAnasayfa=$this->input->post('anasayfa_eski');
        $getHakkimda=$this->input->post('hakkimda_eski');
        $getHaber=$this->input->post('haber_eski');
        $getIletisim=$this->input->post('iletisim_eski');
        if (isset($_POST["anasayfa_fonk"])  && !empty($_POST["anasayfa_fonk"])){
            $config['file_name'] = 'anasayfa';
            $this->load->library("upload", $config);
            if(file_exists('uploads_image/'.$getAnasayfa))
            {
                unlink('uploads_image/'.$getAnasayfa);
            }
            if ($this->upload->do_upload("anasayfa")){  }
        }else if (isset($_POST["hakkimda_fonk"])  && !empty($_POST["hakkimda_fonk"])){
            $config['file_name'] = 'hakkimda';
            $this->load->library("upload", $config);
            if(file_exists('uploads_image/'.$getHakkimda))
            {
                unlink('uploads_image/'.$getHakkimda);
            }
            if ($this->upload->do_upload("hakkimda")){ }
        }else if (isset($_POST["haber_fonk"])  && !empty($_POST["haber_fonk"])){
            $config['file_name'] = 'haber';
            $this->load->library("upload", $config);
            if(file_exists('uploads_image/'.$getHaber))
            {
                unlink('uploads_image/'.$getHaber);
            }
            if ($this->upload->do_upload("haber")){ }
        }else if (isset($_POST["iletisim_fonk"])  && !empty($_POST["iletisim_fonk"])){
            $config['file_name'] = 'iletisim';
            if(file_exists('uploads_image/'.$getIletisim))
            {
                unlink('uploads_image/'.$getIletisim);
            }
            $this->load->library("upload", $config);
            if ($this->upload->do_upload("iletisim")){ }
        }
    }

}
