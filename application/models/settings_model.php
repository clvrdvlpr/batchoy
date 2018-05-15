<?php

class Settings_model extends CI_Model {
    
	private $table = "submitsettings";
	
	// Constructor
	public function __construct()
	{
		parent::__construct();		
	}
        
    // C R E A T E
	public function create_settings($data)
	{
		$this->db->insert($this->table, $data);
		return TRUE;
	}
        
    // R E A D
	public function read_settings()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		
		// $this->db->select("*")
			// ->from($this->table);
			// ->join('','','')
			// ->group_by('','')
			// ->order_by('','')
			
		$query=$this->db->get();
		
		return $query->result_array();
	}
        
    // U P D A T E
    public function update_settings($prop_id)
	{
		$this->db->where('prop_id',$prop_id);
		$this->db->update($this->table, $data);
		return TRUE;
	}
    
	//DELETE
	public function delete_settings($data)
	{
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;
	}
	
	// INSERT DATE
	public function date_settings($date)
	{	
		$this->db->where('date',$date);
		$this->db->insert($this->table, $data);
		return TRUE;
	}
	
	public function last_settings ($yr_id)
	{
		$this->db->where('year_id',$yr_id);
		$this->db->select_max('prop_id');
		$this->db->from($this->table);
		$query=$this->db->get();
		
		return $query->result_array();
	}
	
	public function find_settings()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where('prop_id');
		// return TRUE;
		$query=$this->db->get();
		
		return $query->result_array();
	}

}
