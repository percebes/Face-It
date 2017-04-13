<!doctype html>
<html>
    <?php
        include('templates/head.php');
    ?>
    
    <body>
    <div class="container col-xs-12">
        <!--ESTA ES LA BARRA DE MENU-->
        <ul id="barraMenu" class="nav nav-tabs">
            <li class="active"><a  class="glyphicon glyphicon-home" id="botonHome" data-toggle="tab" href="#home"><span> Face It</span></a></li> 
            
            <li ><a id="botonAbout" data-toggle="tab" href="#about">Sobre nosotros</a></li>
          
            <li ><a id="botonContact" data-toggle="tab" href="#contact">Contacto</a></li>
            <li><a  data-toggle="tab" class="glyphicon glyphicon-log-in" id="inicioSesion" href="#login"><span> Iniciar Sesión</span></a></li>
        </ul>
        <!--_________________________________________________________________-->
        <div class="tab-content">
           
            <!--ESTO ES EL HOME-->
            <div id="home" class="tab-pane fade in active">
                <!--LLAMA AL ARCHIVO HOME -->
                <?php
                    include('templates/home.php');  
                ?>
                
            </div>
            <!--_________________________________________________________________-->
            <!--ESTO ES EL ABOUT-->
            <div id="about" class="tab-pane fade">
                <?php
                    include('templates/about.php');
                ?>
            </div>
            <!--_________________________________________________________________-->
            <!--ESTO ES EL CONTACT-->
            <div id="contact" class="tab-pane fade">
                <?php
                    include('templates/contact.php');
                ?>
            </div>
            <!--_________________________________________________________________-->
            <!--ESTO ES EL LOGIN-->
            <div id="login" class="tab-pane fade">
                <?php
                    include('templates/login.php');
                ?>
            </div>
        </div>
        <!--_________________________________________________________________-->
    </div>
        
        
    </body>

</html>
