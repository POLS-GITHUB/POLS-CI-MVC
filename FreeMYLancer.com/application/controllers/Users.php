<?php
Class Users extends All_Users
{
	public function index()
	{	 
		$this->load->model('Users_Model');
		$this->load->view('public/index');		
	}

	public function register()
	{
		
		
		//******************* CREATE form_validatioon  ************************ //



		$this->load->helper('form');
		
		$this->form_validation->set_rules('Uname','Your Name','trim|required|is_unique[user_reg.Uname]');

		$this->form_validation->set_rules('subject','Subject','required|trim');

		$this->form_validation->set_rules('address','Address','required|trim');

		$this->form_validation->set_rules('Contact','Contact','required|trim');

		$this->form_validation->set_rules('email','Email','required|trim|is_unique[user_reg.email]');

		$this->form_validation->set_rules('pass','Password','required|trim');

		$this->form_validation->set_rules('Cpass', 'Password Confirmation', 'required|trim|matches[pass]');		
		

		// ************* END form_validatioon  ************************ //





		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('public/contact');
		}
		else
		{
			$this->load->model('Users_Model');
			$Username 	= 	$this->input->post('Uname');
			$Subject 	= 	$this->input->post('subject');
			$Address 	= 	$this->input->post('address');
			$Contact 	= 	$this->input->post('contact');
			$Email 	 	= 	$this->input->post('email');
			$Password 	= 	$this->input->post('pass'); //29.03.2019 change password field $this->input->post('password')
			$result = $this->Users_Model->Register_Model($Username,$Subject,$Address,$Contact,$Email,$Password);

			if($result)
			{
				$this->session->set_flashdata('item','Successfully added new data');
				return redirect('CONTACT');
			}
			else
			{
				$this->session->set_flashdata('item2','please Try Again...');
				//echo "Sorry";
			}
		}		
	}
	
	public function about()
	{
		$this->load->view('public/about');
	}
	public function service()
	{
		$this->load->view('public/service');
	}
	public function pages()
	{
		
	}
	public function error()
	{
		$this->load->view('public/error');
	}
	public function gallery()
	{

	}
	public function edit()
	{
		$this->load->view('public/editdata');
	}
	public function contact()
	{
		$this->load->view('public/contact');
	}






	public function RetriveData()
	{
		//$this->load->view('public/AllData');





		/*  1st Pagination Incialised   */
			
			$this->load->model('ArticlesModel');
			

			$config = [
				'base_url'=>base_url('Users/RetriveData'),
				'per_page'=>5,			
				'total_rows'=> $this->ArticlesModel->num_rows(),

				'full_tag_open'  	=> "<ul class='pagination'>",
				'full_tag_close'  	=>  "</ul>",
				'first_tag_open'   	=>  '<li>',
				'first_tag_close'  	=>  '</li>',
				'first_link_open'	=>	'<li>',
				'first_link_close'	=>	'</li>',
				'last_link_open'	=>	'<li>',
				'last_link_close'	=>	'</li>',
				'last_tag_open'   	=>  '<li>',
				'last_tag_close'  	=>  '</li>',
				'next_tag_open'   	=>  '<li>',
				'next_tag_close'  	=>  '</li>',
				'prev_tag_open'   	=>  '<li>',
				'prev_tag_close'  	=>  '</li>',
				'num_tag_open'   	=>  '<li>',
				'num_tag_close'  	=>  '</li>',
				'cur_tag_open'   	=>  "<li class='active'><a>",
				'cur_tag_close'   	=>  '</a></li>',
				
			];

			//

			
			$this->load->library('pagination');			


			$this->pagination->initialize($config);

			/* This code is fetch data */

			// $articles ['art'] = $this->ArticlesModel->articles_List(); 

			/* End This code is fetch data */


			
			$articles ['art2'] = $this->ArticlesModel->articles_List($config['per_page'],$this->uri->segment(3));

			

			// parameter pass in View which Keyname is 'articles and Key Value is $articles .

			$this->load->view('public/AllData',$articles);

			/* End Fetch Data from DataBase */











	}
	
}