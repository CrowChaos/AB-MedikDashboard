<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Subject extends CI_Controller {


	/**
	 * Loading for index view
	 */
	public function index()
	{
		$data['page_title']= "Dashboard Medik";

		$this->load->view('partials/header.php',$data);
		$this->load->view('subject/index.php');
		$this->load->view('partials/footer.php');
	}


	/**
	 * Loadig view for creating new subject
	 */
	public function create() {

		$data['page_title']= "Vytvor noveho pacienta";
			//loading view
		$this->load->view('partials/header.php',$data);
		$this->load->view('subject/create.php');
		$this->load->view('partials/footer.php');
		//confirm Post method
			if ( isset( $_POST["add"]) ) {
				$file = file_get_contents( 'test.json' );
				$add_data = json_decode( $file, true );
				unset( $_POST["add"] );

				$add_data["data"] = array_values( $add_data["data"] );

				array_push( $add_data["data"], $_POST );
				file_put_contents( "test.json", json_encode( $add_data ) );
				redirect('/');
			}
		}

	/**
	 *  Update existing subject in file
	 */
	public function update(){

		$data['page_title']='Upravit informacie';
		//get subject from url
		if (isset($_GET["index"])) {

			    $index =  $_GET["index"];
			    $getfile = file_get_contents('test.json');
			    $jsonfile = json_decode($getfile, true);
			    
			    $jsonfile = $jsonfile["data"];
			   
			    $id = $jsonfile[$index];
			    
			//load view
			    $this->load->view('partials/header.php',$data);
			    $this->load->view('subject/update',$id);
			    $this->load->view('partials/footer.php');
			}

			//save data into file
		if (isset($_POST["index"])) {
			    $index = (int) $_POST["index"];
			    $getfile = file_get_contents('test.json');
			    $all = json_decode($getfile, true);
			    $jsonfile = $all["data"];
			    $jsonfile = $jsonfile[$index];

			    $post["index"] = isset($_POST["index"]) ? $_POST["index"] : "";
			    $post["name"] = isset($_POST["name"]) ? $_POST["name"] : "";
			    $post["age"] = isset($_POST["age"]) ? $_POST["age"] : "";
			    $post["weight"] = isset($_POST["weight"]) ? $_POST["weight"] : "";
			    $post["height"] = isset($_POST["height"]) ? $_POST["height"] : "";
			    $post["bloodtype"] = isset($_POST["bloodtype"]) ? $_POST["bloodtype"] : "";
			    $post["alergies"] = isset($_POST["alergies"]) ? $_POST["alergies"] : "";

				if ($jsonfile) {
					        unset($all["data"][$index]);
					        $all["data"][$index] = $post;
					        $all["data"] = array_values($all["data"]);
					        file_put_contents("test.json", json_encode($all));
					    }
				redirect('/');
					}
	
	}

	/**
	 *Delete from file
	 */
	public function delete(){

		//get index from url
			if (isset($_GET["index"])) {
				$index = (int) $_GET["index"];
				$all = file_get_contents('test.json');
				$all = json_decode($all, true);
				$jsonfile = $all["data"];
				$jsonfile = $jsonfile[$index];

		//if in file-delete
				if ($jsonfile) {
					unset($all["data"][$index]);
					$all["data"] = array_values($all["data"]);
					file_put_contents("test.json", json_encode($all));
				}

				redirect('/');

			}


}

	
}

