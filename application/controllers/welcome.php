<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('file');
		$this->load->helper('directory');
		$path = base_url('Songs');
		
		$song_names = directory_map('/Users/thawheinthit/Music/iTunes/iTunes Media/Music/');
		
		$data["songsName"] = $song_names;
		
		$this->load->view('home',$data);
		
		
	}
	public function get() {
		$song_names = directory_map('/Users/thawheinthit/Music/iTunes/iTunes Media/Music/');
		
		//echo "aaa";
		//echo json_encode($song_names);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */