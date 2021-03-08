<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_controller extends CI_Controller {

	
	public function index()
	{
		$data['titulo']="Veterinaria El Rodeo";
		$this->load->view('plantilla/header',$data);
		$this->load->view('home/index');
		$this->load->view('plantilla/footer');
	}
	public function QuienesSomos(){
		
		$data['titulo']="Quienes Somos";
		$this->load->view('plantilla/header',$data);
		$this->load->view('QuienesSomos');
		$this->load->view('plantilla/footer');
	}
	public function CaninoFelino(){
		
		$data['titulo']="Caninos-Felinos";
		$this->load->view('plantilla/header',$data);
		$this->load->view('CaninoFelino');
		$this->load->view('plantilla/footer');
	}
	public function Bovinos(){
		
		$data['titulo']="Bovinos";
		$this->load->view('plantilla/header',$data);
		$this->load->view('Bovinos');
		$this->load->view('plantilla/footer');
	}
	public function Equinos(){
		
		$data['titulo']="Equinos";
		$this->load->view('plantilla/header',$data);
		$this->load->view('Equinos');
		$this->load->view('plantilla/footer');
	}
	public function Servicios(){
		
		$data['titulo']="Nuestros servicios";
		$this->load->view('plantilla/header',$data);
		$this->load->view('Servicios');
		$this->load->view('plantilla/footer');
	}
	public function Contacto(){
		
		$data['titulo']="Contacto";
		$this->load->view('plantilla/header',$data);
		$this->load->view('Contacto');
		$this->load->view('plantilla/footer');
	}




}
?>