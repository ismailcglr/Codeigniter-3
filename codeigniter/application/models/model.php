<?php
class Model extends CI_Model{
    public function logincontrol($kadi,$sifre){
        $result=$this->db
            ->select("*")->from("yonetici")
            ->where("y_kadi",$kadi)->where("y_sifre",$sifre)
            ->get()->row();
        if(count($result)==1){
            return $result;
        }else{
            return false;
        }
    }
}
