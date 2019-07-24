<?php
class Users_Model extends Role_Model
{
	public function Register_Model($Username,$Subject,$Address,$Contact,$Email,$Password)
	{
	
		$Username   =		$this->input->post('Uname');
		$Subject	=		$this->input->post('subject');
		$Address	=		$this->input->post('address');
		$Contact	=		$this->input->post('Contact');
		$Email		=		$this->input->post('email');
		$Password	=	sha1($this->input->post('pass'));

		$sql = "INSERT INTO user_reg(Uname,subject,address,Contact,email,pass) VALUES(".$this->db->escape($Username).",".$this->db->escape($Subject).",".$this->db->escape($Address).",".$this->db->escape($Contact).",".$this->db->escape($Email).",".$this->db->escape($Password).")";

		$result = $this->db->query($sql);
		if($this->db->affected_rows() === 1)
		{
			return $Username;
		}
		else
		{
			return false;
		}
	}	
}