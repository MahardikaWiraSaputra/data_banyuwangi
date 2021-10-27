<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataset extends MY_Controller {

  function __construct(){
		parent::__construct();
	 	$this->load->model('M_b_data');
}

  public function index()

    {
          $nama_kategori=$this->M_b_data->nama_kategori();
          $nama_urusan=$this->M_b_data->nama_urusan();
          $indikator=$this->M_b_data->indikator();
          // $this->load->library('pagination');
          // $config['total_rows'] = $jumlah_data;
		      // $config['per_page'] = 10;
          // $from = $this->uri->segment(3);
          // $this->pagination->initialize($config);
    			$data = array(
      			'title'          =>  'Banyuwangi Satu Data',
      			'layout'         =>  'v_dataset',
            'indikator'      =>  $indikator,
            'nama_kategori'  =>  $nama_kategori,
            'nama_urusan'  =>  $nama_urusan,

      			);
    			$this->load->view('frontend/layout2',$data);
    }

    public function dtl_i()
      {
            $data = array(
              'title'      =>  'Banyuwangi Satu Data',
              'layout'     =>  'v_dataset_dtl_i',

              );
            $this->load->view('frontend/layout2',$data);
      }

      public function dtl_v()
        {
              $data = array(
                'title'      =>  'Banyuwangi Satu Data',
                'layout'     =>  'v_dataset_dtl_v',

                );
              $this->load->view('frontend/layout2',$data);
        }
  }
