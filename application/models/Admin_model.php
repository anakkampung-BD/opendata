<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function us()
    {
        $hsl = $this->db->query("SELECT * FROM `user`");
        return $hsl;
    }

    public function get_homestay()
    {
        $hsl = $this->db->query("SELECT * FROM `t_homestay`");
        return $hsl;
    }

    public function get_ship()
    {
        $hsl = $this->db->query("SELECT * FROM `t_ship`");
        return $hsl;
    }

    public function get_tamu()
    {
        $hsl = $this->db->query("SELECT * FROM `t_guest`");
        return $hsl;
    }

    public function getSurfer()
    {
        $hsl = $this->db->query("SELECT * FROM t_guest WHERE jenis_kunjungan = 'Surfer'");
        return $hsl;
    }

    public function getNasSurfer()
    {
        $nas = $this->db->query("SELECT * FROM t_guest WHERE jenis_kunjungan = 'Surfer' AND negara='Indonesia'");
        return $nas;
    }

    public function getNonSurfer()
    {
        $hsl = $this->db->query("SELECT * FROM t_guest WHERE jenis_kunjungan = 'Non-Surfer'");
        return $hsl;
    }

    public function tarif()
    {
        $tarif = $this->db->query("SELECT * FROM tb_tarif");
        return $tarif;
    }

    public function edit_tarif($id, $surf_a, $surf_b, $rm)
    {
        $edit = $this->db->query("UPDATE tb_tarif SET surf_int='$surf_a', surf_nas='$surf_b', pjk_rm='$rm' WHERE id='$id'");
        return $edit;
    }

    // Query Identitas Aplikasi
    public function getIdentity()
    {
        $identity = $this->db->query("SELECT * FROM tb_identitas_app");
        return $identity;
    }

    public function getUser()
    {
        $getUser = $this->db->query("SELECT * FROM user");
        return $getUser;
    }

    public function getKec()
    {
        $kec = $this->db->query("SELECT * FROM t_kec");
        return $kec;
    }
}
