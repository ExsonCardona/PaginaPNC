<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>  
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/style2.css">
   
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
                            <li class="active"><a href="#home" class="scroll">Iniciar Sesión</a></li>
                           
                            <li ><a href="cerrarsesion.php">Inicio</a></li>
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

      <div class="wrapper">
    <form class="form-signin" id="form1" method="post" action="conexusuario.php">       
      <h4 align="center">Jefatura de Planificación Estratégica</h4>
      <h4 align="center">Desarrollo Insticional</h4>
      <input type="text" class="form-control" name="user" placeholder="Usuario" required="" autofocus="" />
      <br>
      <input type="password" class="form-control" name="password" placeholder="Contraseña" required=""/>      
      <button class="btn btn-lg btn-danger btn-block" type="submit" value="login">Ingresar</button> 
      
       <div class="col-lg-offset-3">
        <img align="center" src="images/fondo.png" alt="Image responsive" class="img-thumbnail img-responsive">
      </div>
     
      <br>

      </div> 
    </form>
  </div>    
  </body>
</html>
