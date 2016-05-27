<?php
	Class Crud extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->helper(array('url','form'));
				$this->load->model('m_crud');
			}

			public function lihat($offset=0) {


			   $jml = $this->db->get('karyawan');
			   
			   $config['base_url'] = base_url().'crud/lihat';
			   $config['total_rows'] = $jml->num_rows();
			   $config['per_page'] = 3; 
			   $config['uri_segment'] = 3; 
			   $config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
			   $config['full_tag_close'] ="</ul>";
			   $config['num_tag_open'] = '<li>';
			   $config['num_tag_close'] = '</li>';
			   $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			   $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			   $config['next_tag_open'] = "<li>";
			   $config['next_tagl_close'] = "</li>";
			   $config['prev_tag_open'] = "<li>";
			   $config['prev_tagl_close'] = "</li>";
			   $config['first_tag_open'] = "<li>";
			   $config['first_tagl_close'] = "</li>";
			   $config['last_tag_open'] = "<li>";
			   $config['last_tagl_close'] = "</li>";
			  
			   $this->pagination->initialize($config);
			   
			   $data['halaman'] = $this->pagination->create_links();
			   $data['offset'] = $offset;

			   $data['karyawan'] = $this->m_crud->view($config['per_page'], $offset);

			   $this->load->view('v_lihat',$data);
			}

			function tambah(){
				$this->load->view('v_tambah');
			}

			function tambah_act(){

					$kode_karyawan = $this->input->post('kode_karyawan');
					$name = $this->input->post('name');
					$id_manager = $this->input->post('id_manager');
					$tgl_lahir = $this->input->post('tgl_lahir');
					$umur = $this->input->post('umur');

				$data = array(
						'kode_karyawan'=>$kode_karyawan,
						'name'=>$name,
						'id_manager'=>$id_manager,
						'tgl_lahir'=>$tgl_lahir,
						'umur'=>$umur	
					);
				$this->m_crud->m_tambah_act($data,'karyawan');
				redirect(base_url().'crud/lihat');
			}

			function hapus($id){
				$data=array(
					'id'=> $id
					);
				$this->m_crud->m_hapus($data);
				redirect(base_url().'crud/lihat');
			}

			function edit($id){
				$data=array(
					'id'=>$id
					);
					$where=array('id'=>$id);
					$data['data_edit']=$this->m_crud->m_edit($data,'data_edit');
					$this->load->view('v_edit',$data);	
			}
			
			function update(){
				$id = $this->input->post('id');
				$data=array(
					'kode_karyawan'=>$this->input->post('kode_karyawan'),
					'name'=>$this->input->post('name'),
					'id_manager'=>$this->input->post('id_manager'),
					'tgl_lahir'=>$this->input->post('tgl_lahir'),
					'umur'=>$this->input->post('umur')
					);
				$this->m_crud->m_update($data,$id);
				redirect(base_url().'crud/lihat');

			}
		
	}
?>