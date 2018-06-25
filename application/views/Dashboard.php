<?php 

	$this->load->view('component/head');

	#Menú vertical
	//admin
	$this->load->view('component/header');

	#Menú horizontal
	$this->load->view('component/menu');

	// #Contenido
	if(!empty($subview))
		$this->load->view($subview);	
	else
	$this->load->view('component/contenido');		


	// #Pie de página
	$this->load->view('component/footer');

 ?>