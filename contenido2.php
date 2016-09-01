<?php session_start(); ?>
<?php
if (!isset($_SESSION['valido']))
        $_SESSION['valido']=0;

    if($_SESSION['valido']==0){
    echo "<div align='center'>";            
        echo "<img class='img-responsive' src='images/logo72.pn' alt='restringido'>";
        echo "<a class='btn btn-warning' href='index.php'>Login</a>";
    echo "</div>";
    }
else
    {
?>

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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
   
<div class="features-head text-center">
            <h2><span> POLICIA NACIONAL CIVIL </span></h2>
            <p>Jefatura de Planificación Estratégica</p>
            <P>Desarrollo Insticional</P>
          </div>

 

<!--Distrito Central-->
 <div id="central">
 <div class="form-group">
 <div class="col-lg-10 col-lg-offset-2">
<div class="btn-group">
 <div class="col-lg-offset-1">
<h2 align="center">Distrito Central</h2>
</div>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-star-empty"></span> Comisaria 11</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 12</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-star-empty"></span>  Comisaria 13</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 14</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-star-empty"></span> Comisaria 15</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 16 </button>
  <button  id="btnmenu" type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Distritos</button>
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
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 41</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 42</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 43</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 44</button>
 <button  id="btnoccidente" type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Distritos</button>
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
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 71</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 72</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 73</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 74</button>
<button  id="btnocc" type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Distritos</button>
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
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 31</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 32</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 33</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 34</button>
  <button  id="btnsur" type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Distritos</button>
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
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 22</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 51</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 52</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 53</button>
<button  id="btnoro" type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Distritos</button>
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
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 21</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 23</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 24</button>
  <button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 61</button>
<button  id="btnoriente" type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Distritos</button>
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
<button type="button"  class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-star"></span> Comisaria 62</button>
<button  id="btnnorte" type="button"  class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Distritos</button>
</div>
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


</body>
</html>

<?php
}
?>