<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
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

    public function tarif()
    {
        $tarif = $this->db->query("SELECT * FROM tb_tarif");
        return $tarif;
    }

    // Query Identitas Aplikasi
    public function getIdentity()
    {
        $identity = $this->db->query("SELECT * FROM tb_identitas_app");
        return $identity;
    }

    public function getReport()
    {
        $report = $this->db->query("SELECT * FROM `t_guest` WHERE `keterangan`='HOLLOW TREES RESORT' ORDER BY `id` DESC LIMIT 10");
        return $report;
    }
}
