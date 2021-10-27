<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_b_data extends CI_Model{

function nama_kategori(){
  $this->db->select('a.ID, a.KATEGORI');
  $this->db->from('m_kategori as a');
  $query= $this->db->get();
  return $query->result_array();
  }

  function nama_urusan(){
    $this->db->select('a.ID, a.KODE_URUSAN, a.URUSAN');
    $this->db->from('m_urusan as a');
    $query= $this->db->get();
    return $query->result_array();
    }

  function Indikator(){
      $this->db->select('a.INDIKATOR, a.KATEGORI, m_skpd.NAMA_SKPD, m_urusan.URUSAN');
      $this->db->from('v_data_dasar as a');
      $this->db->join('m_skpd', 'a.SKPD_ID = m_skpd.ID');
      $this->db->join('m_urusan', 'a.URUSAN_ID = m_urusan.ID');
      $query= $this->db->get();
      return $query->result_array();
  }

}
