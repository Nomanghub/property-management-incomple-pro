<?php

use app\services\imap\Imap;
use app\services\LeadProfileBadges;
use app\services\leads\LeadsKanban;
use app\services\imap\ConnectionErrorException;
use Ddeboer\Imap\Exception\MailboxDoesNotExistException;

header('Content-Type: text/html; charset=utf-8');
defined('BASEPATH') or exit('No direct script access allowed');

class Tenants extends AdminController
{
    
    public function __construct()
    {
        parent::__construct();
		
        $this->load->model('Tenants_model');
        $this->tenants_model = new Tenants_model;
    }
    
    public function index()
    {	
	    $this->load->library("pagination_bootstrap");
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$get = $this->db->get('tbltenants');
		//number per page
		$this->pagination_bootstrap->offset(15); 
		//set name to links
		$this->pagination_bootstrap->set_links(array('first' => 'go to first', 
													 'last' => 'go to last',
													 'next' => 'Next',
													 'prev' => 'Previous'));
	   $data['tenants_list']=$this->pagination_bootstrap->config("admin/tenants/index", $get); 											 
       $data['title']    = _l('Tenants');
       $this->load->view('admin/tenants/index',$data);
    }


    public function add_tenant()
    {
	   $data['title']    = _l('Add Tenant');
       $this->load->view('admin/tenants/addtenant',$data);
    }
	
	public function insert(){
		$this->load->model('Tenants_model');
		$this->Tenants_model->insert_data();
		redirect(admin_url('tenants'));
	}
	

    public function edit_tenant($id)
    {
       
       $data['edit_data'] = $this->tenants_model->get_eidtdata($id);
       $data['title']    = _l('Edit Tenant');
       $this->load->view('admin/tenants/edittenant',$data);
    }	

	public function update($id){
		$this->load->model('Tenants_model');
		$this->Tenants_model->update_data($id);
		redirect(admin_url('tenants'));
	}


    public function view_tenant($id)
    {
       
       $data['view_data'] = $this->tenants_model->get_viewdata($id);
       $data['title']    = _l('View Tenant');
       $this->load->view('admin/tenants/viewtenant',$data);
    }	
	
	
	public function letters($id){
		$data['view_data'] = $this->tenants_model->get_viewdata($id);
		$data['t_email_letter'] = $this->tenants_model->t_get_email_letter();
		$data['t_select_letter'] = $this->tenants_model->t_get_select_letter($id);
		$data['t_all_letter'] = $this->tenants_model->t_get_letter();		
        $data['title']    = _l('Tenant Letters');
        $this->load->view('admin/tenants/letters',$data);
	}
	
	public function letter_update($id,$pid){
       $data=array(
		
		 'message' => $this->input->post('pro_letter'),
		);
        $this->db->where('emailtemplateid', $id);
		$this->db->update('tblemailtemplates',$data);

       $dataas=array(
		
		 'tenant_id' => $pid,
		 'letter_id' => $this->input->post('selectitem'),
		 'letter_contents' => $this->input->post('pro_letter'),
		);		
        $this->db->where('id', 1);
		$this->db->update('tbltenants_letter',$dataas);		
		redirect(admin_url('tenants/letters/' . $pid));
	}







	
	
	
	
	public function delete_tenant($id){
		$this->db->where('id', $id);
		$this->db->delete('tbltenants');
		redirect(admin_url('tenants'));
	}
	
	
	
	

 
}
