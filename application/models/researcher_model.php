<?php

class Researcher_model extends CI_Model {
    
	private $table = "researcher";
	
	// Constructor
	public function __construct()
	{
		parent::__construct();		
	}
        
    // C R E A T E
	public function create_researcher($data)
	{
		$this->db->insert($this->table, $data);
		return TRUE;
	}
        
    // R E A D
	public function read_researcher()
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
    public function update_researcher($data)
	{
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;
	}
    
	//DELETE
	public function delete_researcher($data)
	{
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;
	}
	
	public function find_researcher($res_id)
	{
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where('researcher_id',$res_id);
			
		$query=$this->db->get();
		
		return $query->result_array();
	}
}
