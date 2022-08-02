<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {
	public function index()
	{
        $data["genelAyar"]=$this->db->select("*")->from("genel_ayar")->get()->row();
        $this->load->view("blog/header",$data);
        $this->load->view('anasayfa');
        $this->load->view("blog/footer",$data);
	}
    public function iletisim(){
        $data["genelAyar"]=$this->db->select("*")->from("genel_ayar")->get()->row();
        $data["rows"]=$this->db->select("*")->from("iletisim_ayar")->get()->row();
        $this->load->view("blog/header",$data);
        $this->load->view("blog/iletisim",$data);
        $this->load->view("blog/footer",$data);
    }
    public function hakkimda(){
        $data["genelAyar"]=$this->db->select("*")->from("genel_ayar")->get()->row();
        $data["rows"]=$this->db->select("*")->from("hakkimda_ayar")->get()->row();
        $this->load->view("blog/header",$data);
        $this->load->view("blog/hakkimda",$data);
        $this->load->view("blog/footer",$data);
    }
    public function gonderi(){
        $data["genelAyar"]=$this->db->select("*")->from("genel_ayar")->get()->row();
        $data["rows"]=$this->db->select("*")->from("haber_ayar")->get()->row();
        $this->load->view("blog/header",$data);
        $this->load->view("blog/gonderi",$data);
        $this->load->view("blog/footer",$data);
    }
}
