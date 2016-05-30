<?php 
class Pages extends CI_Controller {  

    public function index() {
        $page = 'home';
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'HOME', 'pgname' => $page);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }
    
    public function about() {
        $page = 'about';
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'ABOUT THE PROPERTY', 'pgname' => $page);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }
    
    public function gallery() {
        $page = 'gallery';
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'GALLERY', 'pgname' => $page);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }
    
    public function location() {
        $page = 'location';
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'LOCATION', 'pgname' => $page);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }

    public function rates() {
        $page = 'rates';
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'RATES & RESERVATION', 'pgname' => $page);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }
    
    public function contact() {
        $page = 'contact';
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'CONTACT US', 'pgname' => $page);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }

    public function hello() { 
            echo "This is hello function."; 
    } 
} 
?>