<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions

require APPPATH.'/libraries/REST_Controller.php';

class music extends REST_Controller
{
 
function employee_get() {
		$employees = array(
			1 => array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com', 'fact' => 'Loves swimming'),
			2 => array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com', 'fact' => 'Has a huge face'),
			3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => 'Is a Scott!', array('hobbies' => array('fartings', 'bikes'))),
		);
		$this->response($employees);
		
	}
	
	function user_get()
    {
        if(!$this->get('id'))
        {
        	$this->response(NULL, 400);
        }

        // $user = $this->some_model->getSomething( $this->get('id') );
    	$users = array(
			1 => array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com', 'fact' => 'Loves swimming'),
			2 => array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com', 'fact' => 'Has a huge face'),
			3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => 'Is a Scott!', array('hobbies' => array('fartings', 'bikes'))),
		);
		
    	$user = @$users[$this->get('id')];
    	
        if($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'User could not be found'), 404);
        }
        
    }
    
    function user_post()
    {
        //$this->some_model->updateUser( $this->get('id') );
        $message = array('id' => $this->get('id'), 'name' => $this->post('name'), 'email' => $this->post('email'), 'message' => 'ADDED!');
        
        $this->response($message, 200); // 200 being the HTTP response code
    }
    
    function user_delete()
    {
    	//$this->some_model->deletesomething( $this->get('id') );
        $message = array('id' => $this->get('id'), 'message' => 'DELETED!');
        
        $this->response($message, 200); // 200 being the HTTP response code
    }
    
    function songs_get()
    {
        
        $this->load->helper('directory');
        $rawData = directory_map('/Users/thawheinthit/Music/iTunes/iTunes Media/Music/');
        $artists = directory_map('/Users/thawheinthit/Music/iTunes/iTunes Media/Music/');
        
        foreach ($rawData as $key => $data) {
        	$songArr[] = "artist : ".$key;
        }
        
//        foreach ($artists as $artist => $albums) {
//        	foreach ($albums as $album => $songs) {
//        		foreach ($songs as $song) {
//        			 //$data[]= "Artist : ". $artist. ", Album : ".$album . ", Song : ". $song;
//        			 $data[] = "Song: ".$song.", Album : ".$album.", Artist : ".$artist;
//        			 
//        		}
//        	}
//        }
//        
//        
        
        foreach ($artists as $artist => $albums) {
        	foreach ($albums as $album => $songs) {
        		foreach ($songs as $song) {
        			 //$data[]= "Artist : ". $artist. ", Album : ".$album . ", Song : ". $song;
        			 $data[] = "Song: ".$song.", Album : ".$album.", Artist : ".$artist;
        			 
        			 
        			 
        		}
        	}
        	
        	$response[] = $artist; 
        }
        
        
        
        $respond = array( "respond" => $data);
        
        
        $sample = array("artist"=>array("adle"
        									=> array("album"=>array("album1","album2")),
        								"bruno mars")
        		);
        
        if($data)
        {
            $this->response($data, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any songs!'), 404);
        }
    }


	public function send_post()
	{
		var_dump($this->request->body);
	}


	public function send_put()
	{
		var_dump($this->put('foo'));
	}


}