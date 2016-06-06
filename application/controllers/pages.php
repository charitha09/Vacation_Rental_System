<?php 
class Pages extends CI_Controller {  

    public function index() {
        $page = 'home';
        $pgindex = 0;
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'HOME', 'pgname' => $page, 'pgindex' => $pgindex);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }
    
    public function about() {
        $page = 'about';
        $pgindex = 1;
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'HOME', 'pgname' => $page, 'pgindex' => $pgindex);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }
    
    public function gallery() {
        $page = 'gallery';
        $pgindex = 2;
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'HOME', 'pgname' => $page, 'pgindex' => $pgindex);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }
    
    public function location() {
        $page = 'location';
        $pgindex = 3;
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'HOME', 'pgname' => $page, 'pgindex' => $pgindex);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }

    public function rates() {
        $page = 'rates';
        $pgindex = 4;
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'HOME', 'pgname' => $page, 'pgindex' => $pgindex);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }
    
    public function contact() {
        $page = 'contact';
        $pgindex = 5;
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();//if requested page not exsists
        }else{		
            $data = array('title' => 'HOME', 'pgname' => $page, 'pgindex' => $pgindex);
            //Loarding DOM
            $this->load->view('pages/'.$page, $data);				
        }
    }
} 
?>