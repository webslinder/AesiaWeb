<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8" />
		<?=$this->load->view('templates/head')?>
		<title>AESIA FMOcc | Official Website</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	</head>
	<body>
		
			<?=$this->load->view('templates/menu')?>
			
			<?=$this->load->view('home/section-home')?>
			
			<?=$this->load->view('home/section-about')?>
			
			<?=$this->load->view('home/section-proyectos')?>
			
			<?=$this->load->view('home/section-information')?>
			
			<?=$this->load->view('home/section-gallery')?>
			
			<?=$this->load->view('home/section-contact')?>

			<?=$this->load->view('home/section-map')?>
			
			<?=$this->load->view('templates/footer')?>
		
		<?=$this->load->view('templates/scripts')?>
		
	</body>
</html>