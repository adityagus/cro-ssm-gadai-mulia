<?php

class M_login extends CI_Model{

  //start using DB 2
  function cek_login($user, $pass)
  {//not used version old
    $db2 = $this->load->database('db2', TRUE);
    $db2->where('username', $user);
    $db2->where('password', md5($pass));
    return $db2->get('tbl_user');
  }

  function get_data($user, $pass)
  {//not used version old
    $db2 = $this->load->database('db2', TRUE);
    $db2->from('tbl_user');
    $db2->join('mst_cabang','mst_cabang.id_cabang=tbl_user.id_cabang');
    $db2->where('username', $user);
    $db2->where('password', md5($pass));
    return $db2->get();
  }
  //end using DB 2

  //start using DB 3
  function cek_login_v2($user, $pass)
  {//used current version
    $db3 = $this->load->database('db3', TRUE);
    $grup = array(1,16,19,24,49,63,73,35);
    $db3->where('username', $user);
    $db3->where('userpass', md5($pass));
    $db3->where('active', TRUE);
    $db3->where_in('idgrup', $grup);
    return $db3->get('erpuser');
  }

  function get_data_v2($user, $pass)
  {//used current version
    $db3 = $this->load->database('db3', TRUE);
    $grup = array(1,16,19,24,49,63,73,35);
    $db3->where('username', $user);
    $db3->where('userpass', md5($pass));
    $db3->where('active', TRUE);
    $db3->where_in('idgrup', $grup);
    return $db3->get('erpuser');
  }
  //end using DB 3

}
