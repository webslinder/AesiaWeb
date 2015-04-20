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
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true">
    </script>
  <!-- first section - Home -->
  <div id="home" class="home">
    <div class="text-vcenter">
      <h1 id="head1">AESIA</h1>
      <h3 id="subhead">Asociacion de Estudiantes de Ingenieria y arquitectura</h3>
     <a href="#about" class="btn btn-info btn-raised">Conocenos</a>
    </div>
  </div>
  
  <div id="about" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?= base_url()?>public/imgs/logo.png" alt="" />
        </div>
        <div class="col-sm-6 text-center">
          <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet.</h2>
          <p class="lead" id="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum metus et ligula venenatis, at rhoncus nisi molestie. Pellentesque porttitor elit suscipit massa laoreet metus.</p>
        </div>
      </div>
    </div>
  </div>
 
  <div id="proyectos" class="pad-section">
    <div class="container">
      <h2 class="text-center">Proyectos</h2> <hr />
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6">
          <i class="icon ion-android-settings"> </i>
          <h4>Congreso de Estudiantes de ING Y ARQ</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
        <div class="col-sm-3 col-xs-6">
          <i class="icon ion-ios-compose"> </i>
          <h4>Instructorias</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
        <div class="col-sm-3 col-xs-6">
          <i class="icon ion-ios-partlysunny"> </i>
          <h4>Medio Ambiente</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
        <div class="col-sm-3 col-xs-6">
          <i class="icon ion-android-create"> </i>
          <h4>Cursos de ingles</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Seccion - de informacion -->
  <div id="information" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Vision</h2>
            </div>
            <div class="panel-body lead" id="vi">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Mision</h2>
            </div>
            <div class="panel-body lead" id="mi">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div id="galery" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="container">
      <div class="row">
        <div class="col-lg-12">
        </div>
        <div id="blueimp-gallery" class="blueimp-gallery">
          <div class="slides"></div>
          <h3 class="title"></h3>
          <a class="prev">‹</a>
          <a class="next">›</a>
          <a class="close">×</a>
          <a class="play-pause"></a>
        <ol class="indicator"></ol>
      </div>
      <div id="links">
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/1.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/2.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/2.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/3.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/3.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/4.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/4.jpg" alt="">
        </a>
      </div>
      
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/1.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/2.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/2.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/3.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/3.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/4.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/4.jpg" alt="">
        </a>
      </div>
      
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/1.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="<?= base_url()?>public/imgs/thumbs/2.jpg">
          <img class="img-responsive" src="<?= base_url()?>public/imgs/thumbs/2.jpg" alt="">
        </a>
      </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
 
  <div id="proyectos" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>Contactanos</h3>
          <h4>Universidad de El Salvador Faculta Multidiciplinaria de Occidente</h4>
          <br>
         <a data-toggle="modal" href="#message" class="btn btn-primary">Escribenos</a>
        </div>
       

<div class="modal" id="message">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Escribenos</h4>
        </div>
        <div class="modal-body">
          <form>

           <input class="form-control floating-label" placeholder="Email" type="email">
            <br>
            <br>
            <input class="form-control floating-label" placeholder="Asunto" type="text">
             <br>
             <br>
              <textarea class="form-control floating-label" placeholder="Mensaje..."></textarea>
          </form>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Salir</a>
          <a href="#" class="btn btn-primary">Enviar Mensaje</a>
        </div>
      </div>
    </div>
</div>
      </div>
    </div>
  </div>
  

 
  <div id="google_map"></div>
  

 
 
   <?=$this->load->view('templates/footer')?>
   <?=$this->load->view('templates/scripts')?>
 </body>
</html>