<?php

use app\services\AbstractKanban;

defined('BASEPATH') or exit('No direct script access allowed');

class Tenants_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Get lead by given email
     *
     * @since 2.8.0
     *
     * @param  string $email
     *
     * @return \strClass|null
     */
    public function get_pro($limit,$offset){
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit,$offset);
        return $this->db->get('tbltenants')->result();
    }
	
	public function getTotalrow(){
		$q=$this->db->get('tbltenants');
		 return $q->num_rows();
	}
	
	
	public function insert_data(){
        $data=array(
		
		'tenant_type' => $this->input->post('tenant_type'),
		'tenant_name' => $this->input->post('tenant_name'),
		'tenant_gender' => $this->input->post('tenant_gender'),
		'tenant_bdate' => $this->input->post('tenant_bdate'),
		'tenant_idpass' => $this->input->post('tenant_idpass'),
		'tenant_mastatus' => $this->input->post('tenant_mastatus'),
		'tenant_email' => $this->input->post('tenant_email'),
		'tenant_phone' => $this->input->post('tenant_phone'),
		'tenant_country' => $this->input->post('tenant_country'),
		'tenant_city' => $this->input->post('tenant_city'),
		'tenant_zip' => $this->input->post('tenant_zip'),
		'tenant_address' => $this->input->post('tenant_address'),
		'tenant_phyaddress' => $this->input->post('tenant_phyaddress'),
		'tenant_kinname' => $this->input->post('tenant_kinname'),
		'tenant_kinphone' => $this->input->post('tenant_kinphone'),
		'tenant_kinrelate' => $this->input->post('tenant_kinrelate'),
		'tenant_emername' => $this->input->post('tenant_emername'),
		'tenant_emerphone' => $this->input->post('tenant_emerphone'),
		'tenant_emeremail' => $this->input->post('tenant_emeremail'),
		'tenant_emerrelas' => $this->input->post('tenant_emerrelas'),
		'tenant_emeraddress' => $this->input->post('tenant_emeraddress'),
		'tenant_emphyaddress' => $this->input->post('tenant_emphyaddress'),
		'tenant_empstatus' => $this->input->post('tenant_empstatus'),
		'tenant_empposition' => $this->input->post('tenant_empposition'),
		'tenant_emplphone' => $this->input->post('tenant_emplphone'),
		'tenant_emplemail' => $this->input->post('tenant_emplemail'),
		'tenant_emplpoadd' => $this->input->post('tenant_emplpoadd'),
		'tenant_emplphyadd' => $this->input->post('tenant_emplphyadd'),
		
		);
		$this->db->insert('tbltenants',$data);
		
        $dataa=array(
		'email' => $this->input->post('tenant_email'),
		'firstname' => $this->input->post('tenant_name'),
		'phonenumber' => $this->input->post('tenant_phone'),
		'password' => '$2a$08$UUfaOj/Kk1sRU.4c3Za/7e6v/t5BFeYYZXNr5y7w/B8orJ/aa/5b.',
		'datecreated' => date('Y-m-d h:i:sa'),
		'admin' => 0,
		'role' => 2,
		'active' => 1,
		'media_path_slug' => $this->input->post('tenant_name'),
		'is_not_staff' => 1,
		'hourly_rate' => 0.00,
		'two_factor_auth_enabled' => 0,
		);
        $this->db->insert('tblstaff',$dataa);
       		
		
	}

    public function get_eidtdata($id){
        $this->db->where('id', $id);
        return $this->db->get('tbltenants')->result();
    }	



	
	public function update_data($id){
        $data=array(
		
		'tenant_type' => $this->input->post('tenant_type'),
		'tenant_name' => $this->input->post('tenant_name'),
		'tenant_gender' => $this->input->post('tenant_gender'),
		'tenant_bdate' => $this->input->post('tenant_bdate'),
		'tenant_idpass' => $this->input->post('tenant_idpass'),
		'tenant_mastatus' => $this->input->post('tenant_mastatus'),
		'tenant_email' => $this->input->post('tenant_email'),
		'tenant_phone' => $this->input->post('tenant_phone'),
		'tenant_country' => $this->input->post('tenant_country'),
		'tenant_city' => $this->input->post('tenant_city'),
		'tenant_zip' => $this->input->post('tenant_zip'),
		'tenant_address' => $this->input->post('tenant_address'),
		'tenant_phyaddress' => $this->input->post('tenant_phyaddress'),
		'tenant_kinname' => $this->input->post('tenant_kinname'),
		'tenant_kinphone' => $this->input->post('tenant_kinphone'),
		'tenant_kinrelate' => $this->input->post('tenant_kinrelate'),
		'tenant_emername' => $this->input->post('tenant_emername'),
		'tenant_emerphone' => $this->input->post('tenant_emerphone'),
		'tenant_emeremail' => $this->input->post('tenant_emeremail'),
		'tenant_emerrelas' => $this->input->post('tenant_emerrelas'),
		'tenant_emeraddress' => $this->input->post('tenant_emeraddress'),
		'tenant_emphyaddress' => $this->input->post('tenant_emphyaddress'),
		'tenant_empstatus' => $this->input->post('tenant_empstatus'),
		'tenant_empposition' => $this->input->post('tenant_empposition'),
		'tenant_emplphone' => $this->input->post('tenant_emplphone'),
		'tenant_emplemail' => $this->input->post('tenant_emplemail'),
		'tenant_emplpoadd' => $this->input->post('tenant_emplpoadd'),
		'tenant_emplphyadd' => $this->input->post('tenant_emplphyadd'),
		
		);
		
		$this->db->where('id', $id);
		$this->db->update('tbltenants',$data);
		
	}	
	


    public function get_viewdata($id){
        $this->db->where('id', $id);
        return $this->db->get('tbltenants')->result();
    }	
	
	

	public function t_get_select_letter($id){
		$this->db->where('tenant_id', $id);
        return $this->db->get('tbltenants_letter')->result();			
	}
	
	public function t_get_email_letter(){
		$this->db->where('language', 'english');
		$this->db->where('active', 1);
		$this->db->where('type', 'letters');
		$this->db->where('slug', 'tenant-letter');
		$this->db->order_by('emailtemplateid', 'desc');
        return $this->db->get('tblemailtemplates')->result();		
	}

    public function t_get_letter(){
		$this->db->where('type', 'letters');
		$this->db->where('slug', 'tenant-letter');
		$this->db->order_by('emailtemplateid', 'asc');
		$this->db->where('language', 'english');
		$this->db->where('active', 1);
        return $this->db->get('tblemailtemplates')->result();
    }	
	
	
    //public function index()
    //{	
	//   $this->load->library("pagination");
	 //  $config['base_url'] = admin_url('tenants/index');
	 //  $config['per_page'] = 1; 
	 //  $config['total_rows'] = $this->tenants_model->getTotalrow();  
     //  $this->pagination->initialize($config);		
     //  $get_tens = $this->tenants_model->get_pro($config['per_page'],$this->uri->segment(3));
     //  $data['tenants_list'] = $get_tens;
     //  $data['title']    = _l('Tenants');
     //  $this->load->view('admin/tenants/index',$data);
   // }	

}
