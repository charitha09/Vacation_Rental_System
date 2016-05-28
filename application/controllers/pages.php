<?php 
	class Pages extends CI_Controller {  
	
		public function index() {
			$page = 'home';
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();//if requested page not exsists
			}else{				
				$data['title'] = ucfirst($page);//Capitalize the first letter for title
				//Loarding DOM
				$this->load->view('templates/html_header.php', $data);
				$this->load->view('pages/'.$page, $data);				
			}
		} 
  
		public function hello() { 
			echo "This is hello function."; 
		} 
	} 
?>