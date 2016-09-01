
<html>
<head>
<meta charset="UTF-8">
<title>JEPEDI</title>
<link rel="shortcut icon" type="images/pnc.png" href="pnc.png">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
<!---- start-smoth-scrolling---->
 <!-- Custom Theme files -->

<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<!----start-top-nav-script---->
        <script>
            $(function() {
                var pull        = $('#pull');
                    menu        = $('nav ul');
                    menuHeight  = menu.height();
                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });
        </script>
<!----//End-top-nav-script---->
<style type="text/css">
  h1 { color: red;  font-family: Arial;   font-size: large;  }
  p  { color: gray; font-family: Verdana; font-size: medium; }
</style>
<style type="text/css">
.article {
  float: left;
  margin: 5px;
  padding: 5px;
  width: 300px;
  height: 300px;
  border: 1px solid black;
} 
</style>


</head>
<body>


        <!-----start-container---->
            <!----- start-header---->
            <div id="home" class="header">
                <div class="container">
                    
                    
                    <!----start-top-nav---->
                     <nav class="top-nav">
                        <ul class="top-nav">
                            <li class="active"><a href="#home" class="scroll">Bienvenidos</a></li>
                            <li ><a href="contenido.php" >Mensual</a></li>
                            <li ><a href="cerrarsesion.php">Cerrar Sesion</a></li>
                        </ul>
                        <a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
                    </nav>
                    <div class="clearfix"> </div>
                    <div class="contact-info">
                       
                    </div>
                </div>
            </div>

            <!----- //End-header---->
            <!----start-slider-script---->
            <script src="js/responsiveslides.min.js"></script>
             <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });
            
                });
              </script>
            <!----//End-slider-script---->
            <!-- Slideshow 4 -->

<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
<script src="js/script.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
   
<div class="features-head text-center">
       
               <h2><span> POLICIA NACIONAL CIVIL </span></h2>
            <h3>REPORTE SEMANAL SOBRE LA DELINCUENCIA EN GUATEMALA </h3><span> </span>

          </div>
          <div align="center">
            <p>Cada semana el Departamento Planificación Operativa JEPEDI publica información de incidencia delictiva en su sitio web.</p> 
           <p> Este sitio web presenta los datos de una manera fácil de interpretar</p>
            <p>Jefatura de Planificación Estratégica
            Desarrollo Institucional</P>
            </div>
<hr align="left" noshade="noshade" size="2" width="80%" />

<!--Distrito Central-->
 <div id="central">
 <div class="form-group">
 <div class="col-lg-10 col-lg-offset-3">
<div class="btn-group">
 <div class="col-lg-offset-1">
<h2 align="center">Distrito Central</h2>
</div>
  <button id="btn11" type="button"  class="btn btn-primary">Comisaria 11</button>
  <button id="btn12"type="button"  class="btn btn-primary"> Comisaria 12</button>
  <button id="btn13"type="button"  class="btn btn-primary"> Comisaria 13</button>
  <button id="btn14"type="button"  class="btn btn-primary"> Comisaria 14</button>
  <button id="btn15"type="button"  class="btn btn-primary"> Comisaria 15</button>
  <button id="btn16"type="button"  class="btn btn-primary"> Comisaria 16 </button>
  <button  id="btnmenu" type="button"  class="btn btn-primary"> Distritos</button>
</div>
</div>
</div>
</div>


<!--Distrito Occidente-->
<div id="occidente">
<div class="form-group">
<div class="col-lg-10 col-lg-offset-4">
<div class="btn-group">
<div class="col-lg-offset-1">
<h2 align="center">Distrito Occidente</h2>
</div>
  <button id="btn41"  type="button"  class="btn btn-primary"> Comisaria 41</button>
  <button id="btn42" type="button"  class="btn btn-primary"> Comisaria 42</button>
  <button id="btn43" type="button"  class="btn btn-primary"> Comisaria 43</button>
  <button id="btn44" type="button"  class="btn btn-primary"> Comisaria 44</button>
 <button  id="btnoccidente"  type="button"  class="btn btn-primary"> Distritos</button>
</div>
</div>
</div>
</div>

<!--Distrito NorOccidente-->
<div id="noccidente">
 <div class="form-group">
 <div class="col-lg-10 col-lg-offset-4">
<div class="btn-group">
<div class="col-lg-offset-1">
<h2 align="center">Distrito Nor Occidente</h2>
</div>
  <button id="btn71" type="button"  class="btn btn-primary"> Comisaria 71</button>
  <button id="btn72" type="button"  class="btn btn-primary"> Comisaria 72</button>
  <button id="btn73" type="button"  class="btn btn-primary"> Comisaria 73</button>
  <button id="btn74" type="button"  class="btn btn-primary"> Comisaria 74</button>
<button  id="btnocc"  type="button"  class="btn btn-primary"> Distritos</button>
</div>
</div>
</div>
</div>

<!--Distrito Sur-->
<div id="sur">
 <div class="form-group">
 <div class="col-lg-10 col-lg-offset-4">
<div class="btn-group">
<div class="col-lg-offset-1">
<h2 align="center">Distrito Sur</h2>
</div>
  <button id="btn31" type="button"  class="btn btn-primary"> Comisaria 31</button>
  <button id="btn32" type="button"  class="btn btn-primary"> Comisaria 32</button>
  <button id="btn33" type="button"  class="btn btn-primary"> Comisaria 33</button>
  <button id="btn34" type="button"  class="btn btn-primary"> Comisaria 34</button>
  <button  id="btnsur"  type="button"  class="btn btn-primary"> Distritos</button>
 </div>
</div>
</div>
</div>

<!--Distrito Nor-Oriente-->
<div id="noriente">
 <div class="form-group">
 <div class="col-lg-10 col-lg-offset-4">
<div class="btn-group">
<div class="col-lg-offset-1">
<h2 align="center">Distrito Nor Oriente</h2>
</div>
  <button id="btn22"type="button"  class="btn btn-primary"> Comisaria 22</button>
  <button id="btn51"type="button"  class="btn btn-primary"> Comisaria 51</button>
  <button id="btn52"type="button"  class="btn btn-primary"> Comisaria 52</button>
  <button id="btn53"type="button"  class="btn btn-primary"> Comisaria 53</button>
<button  id="btnoro"  type="button"class="btn btn-primary"> Distritos</button>
</div>
</div>
</div>
</div>

<!--Distrito Oriente-->
<div id="oriente">
 <div class="form-group">
 <div class="col-lg-10 col-lg-offset-4">
<div class="btn-group">
<div class="col-lg-offset-1">
<h2 align="center">Distrito Oriente</h2>
</div>
  <button id="btn21" type="button"  class="btn btn-primary"> Comisaria 21</button>
  <button id="btn23" type="button"  class="btn btn-primary"> Comisaria 23</button>
  <button id="btn24" type="button"  class="btn btn-primary"> Comisaria 24</button>
  <button id="btn61" type="button"  class="btn btn-primary"> Comisaria 61</button>
<button id="btnoriente"  type="button"  class="btn btn-primary"> Distritos</button>
</div>
</div>
</div>
</div>

<!--Distrito Norte-->
<div id="norte">
 <div class="form-group">
 <div class="col-lg-10 col-lg-offset-4">
<div class="btn-group">
<div class="col-lg-offset-1 col-lg-offset-10">
<h2 align="center">Distrito Norte</h2>
</div>
<button id="btn62" type="button"  class="btn btn-primary"> Comisaria 62</button>
<button  id="btnnorte"  type="button"  class="btn btn-primary"> Distritos</button>
</div>
</div>
</div>
</div>


<!--Distritos Menu-->
 <div id="distritos">
 <div class="form-group">
 <div class="col-lg-2 ">
<div class="btn-group">
<ul class="menu menu-responsive">
        <li><a id="dcentral"   >Distrito Central</a></li>
        <li><a id="dsur"       >Distrito Sur</a></li>
        <li><a id="doccidente" >Distrito Occidente</a></li>
        <li><a id="doriente"   >Distrito Oriente</a></li>
        <li><a id="dnocc"      >Distrito Nor-Occidente</a></li>    
        <li><a id="dnoro"      >Distrito Nor-Oriente</a></li>
        <li><a id="dnorte"     >Distrito Norte</a></li>
    
</ul>
</div>
</div>
</div>
</div>
<div class="dropshadow">
<div class="innerbox">
  <img id="imag" src="images/fondo.png" alt="Imagen genérica" />
</div>
</div>


<!--Distrito Central-->
<!--Comisaria 11-->
<div id="img11" align="center">
<img src="images/11/11.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/11/com11.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/11/com111.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/11/com112.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/11/com113.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/11/com114.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/11/com115.JPG" class="img-responsive" alt="Imagen responsive">
</div>
<!--Comisaria 12-->
<div id="img12" align="center">
<img src="images/12/12.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/12/com12.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/12/com121.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/12/com122.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/12/com123.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/12/com124.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/12/com125.JPG" class="img-responsive" alt="Imagen responsive">
</div>
<!--Comisaria 13-->
<div id="img13" align="center">
<img src="images/13/13.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/13/com13.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/13/com131.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/13/com132.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/13/com133.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/13/com134.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/13/com135.JPG" class="img-responsive" alt="Imagen responsive">
</div>
<!--Comisaria 14-->
<div id="img14" align="center">
<img src="images/14/14.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/14/com14.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/14/com141.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/14/com142.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/14/com143.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/14/com144.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/14/com145.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<div id="img15" align="center">
<img src="images/15/15.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/15/com15.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/15/com151.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/15/com152.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/15/com153.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/15/com154.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/15/com155.JPG" class="img-responsive" alt="Imagen responsive">
</div>
<!--Comisaria 16-->
<div id="img16" align="center">
<img src="images/16/16.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/16/com16.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/16/com161.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/16/com162.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/16/com163.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/16/com164.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/16/com165.JPG" class="img-responsive" alt="Imagen responsive">
</div>
<!--Distrito Occidente-->
<!--Comisaria 41-->
<div id="img41" align="center">
<img src="images/41/41.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/41/com41.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/41/com411.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/41/com412.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/41/com413.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/41/com414.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/41/com415.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 42-->
<div id="img42" align="center">
<img src="images/42/42.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/42/com42.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/42/com421.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/42/com422.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/42/com423.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/42/com424.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/42/com425.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 43-->
<div id="img43" align="center">
<img src="images/43/43.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/43/com43.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/43/com431.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/43/com432.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/43/com433.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/43/com434.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/43/com435.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 44-->
<div id="img44" align="center">
<img src="images/44/44.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/44/com44.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/44/com441.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/44/com442.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/44/com443.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/44/com444.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/44/com445.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Distrito Sur-->
<!--Comisaria 31-->
<div id="img31" align="center">
<img src="images/31/31.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/31/com31.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/31/com311.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/31/com312.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/31/com313.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/31/com314.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/31/com315.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 32-->
<div id="img32" align="center">
<img src="images/32/32.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/32/com32.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/32/com321.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/32/com322.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/32/com323.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/32/com324.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/32/com325.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 33-->
<div id="img33" align="center">
<img src="images/33/33.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/33/com33.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/33/com331.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/33/com332.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/33/com333.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/33/com334.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/33/com335.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 34-->
<div id="img34" align="center">
<img src="images/34/34.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/34/com34.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/34/com341.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/34/com342.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/34/com343.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/34/com344.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/34/com345.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Distrito Oriente-->
<!--Comisaria 21-->
<div id="img21" align="center">
<img src="images/21/21.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/21/com21.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/21/com211.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/21/com212.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/21/com213.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/21/com214.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/21/com215.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 23-->
<div id="img23" align="center">
<img src="images/23/23.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/23/com23.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/23/com231.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/23/com232.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/23/com233.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/23/com234.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/23/com235.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 24-->
<div id="img24" align="center">
<img src="images/24/24.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/24/com24.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/24/com241.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/24/com242.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/24/com243.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/24/com244.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/24/com245.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 61-->
<div id="img61" align="center">
<img src="images/61/61.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/61/com61.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/61/com611.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/61/com612.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/61/com613.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/61/com614.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/61/com615.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Distrito Nor-Occidente -->
<!--Comisaria 71-->
<div id="img71" align="center">
<img src="images/71/71.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/71/com71.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/71/com711.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/71/com712.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/71/com713.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/71/com714.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/71/com715.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 72-->
<div id="img72" align="center">
<img src="images/72/72.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/72/com72.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/72/com721.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/72/com722.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/72/com723.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/72/com724.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/72/com725.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 73-->
<div id="img73" align="center">
<img src="images/73/73.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/73/com73.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/73/com731.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/73/com732.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/73/com733.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/73/com734.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/73/com735.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 74-->
<div id="img74" align="center">
<img src="images/74/74.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/74/com74.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/74/com741.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/74/com742.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/74/com743.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/74/com744.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/74/com745.JPG" class="img-responsive" alt="Imagen responsive">
</div>


<!--Distrito Nor-Oriente-->
<!--Comisaria 22-->
<div id="img22" align="center">
<img src="images/22/22.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/22/com22.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/22/com221.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/22/com222.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/22/com223.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/22/com224.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/22/com225.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 51-->
<div id="img51" align="center">
<img src="images/51/51.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/51/com51.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/51/com511.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/51/com512.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/51/com513.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/51/com514.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/51/com515.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 52-->
<div id="img52" align="center">
<img src="images/52/52.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/52/com52.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/52/com521.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/52/com522.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/52/com523.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/52/com524.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/52/com525.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Comisaria 53-->
<div id="img53" align="center">
<img src="images/53/53.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/53/com53.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/53/com531.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/53/com532.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/53/com533.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/53/com534.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/53/com535.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<!--Distrito Norte-->
<div id="img62" align="center">
<img src="images/62/62.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/62/com62.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/62/com621.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/62/com622.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/62/com623.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/62/com624.JPG" class="img-responsive" alt="Imagen responsive">
<img src="images/62/com625.JPG" class="img-responsive" alt="Imagen responsive">
</div>

<embed src="manual.pdf" width="1000" height="600">




</body>
</html>
