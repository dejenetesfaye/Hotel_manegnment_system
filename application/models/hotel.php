<?php
	class hotel extends CI_model{

		public function getPosts(){
			
		//$query = $this->db->get('room_cost');
		$query = $this->db->get_where('room_cost', array('id' => 1));
			return $query->result_array();
			}
			
			
			
			public function getCosts(){
			
		//$query = $this->db->get('room_cost');
		$query = $this->db->get_where('room_cost', array('id' => 2));
			return $query->result_array();
			}
			
			public function getPrices(){
			
		//$query = $this->db->get('room_cost');
		$query = $this->db->get_where('room_cost', array('id' => 3));
			return $query->result_array();
			}

		public function book_standard_room($data)
		{
			return $this->db->insert('book_standard_room', $data);
		}
		public function book_double_room($data)
		{
			return $this->db->insert('book_double_room', $data);
		}
		public function book_special_room($data)
		{
			return $this->db->insert('book_special_room', $data);
		}
		
		
		public function log_in_correctly() {  
      
            $this->db->where('username', $this->input->post('username'));  
            $this->db->where('password', $this->input->post('password'));  
            $query = $this->db->get('signup');  
      
            if ($query->num_rows() == 1)  
            {  
                return true;  
            } else {  
                return false;  
            }  
      
        }
	}

?>