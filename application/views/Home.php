<?php 

	$this->load->view('front/head');

	#Menú vertical
	//admin
	$this->load->view('front/header');

	#Menú horizontal
	$this->load->view('front/banner');

	// #Contenido
	if(!empty($subview))
		$this->load->view($subview);	
	else
	$this->load->view('front/contenido');		


	// #Pie de página
	$this->load->view('front/footer');

 ?>