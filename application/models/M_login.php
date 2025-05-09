<?php
class M_login extends CI_Model{
  
    function cek_login($user){
        $grup = ['JBT-032'];
        
        $db3 = $this->load->database('db3', TRUE);
        $db3->select('a.username, a.password, b.nm_depan, b.nm_belakang, c.kd_jabatan'); 
        $db3->from('tbluser as a'); 
        $db3->join('tblkaryawan as b','a.fk_karyawan = b.npk');
        $db3->join('tbljabatan as c','b.fk_jabatan = c.kd_jabatan');
        //$db3->join('tblcabang as d','a.fk_cabang_user = d.kd_cabang');
        $db3->where('a.username', $user);
        $db3->where('a.active', 't');
        $db3->where_in('c.kd_jabatan', $grup);

        return $db3->get()->result();
    }

}
