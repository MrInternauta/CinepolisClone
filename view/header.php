<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cinepolis | Home</title>
        <link rel="icon" type="image/x-icon" href="https://static.cinepolis.com/favicon.ico" />
        <link rel="stylesheet" href="view/assets/css/normalize.min.css">
        <link rel="stylesheet" href="view/assets/css/style-index.css">

    </head>
    <body>
 



     <div class="container-main">
            <header>
                <nav>
                    <div class="logo">
                        <a href="index.php">
                            <img src="view/assets/images/cinepolis-mono.png" width="150px" >
                        </a>
                    </div>

                    <div class="seleccion-cartelera">
                        <form class="ciudad-complejo" action="cartelera.php" method="post">
                           <!-- <select name="ciudad">
                                <option value="false">-Selecciona una ciudad-</option>
                                <option value="Coatzacoalcos">Coatzacoalcos</option>
                                <option value="Minatitlán">Minatitlán</option>
                                <option value="Cosoleacaque">Cosoleacaque</option>
                                <option value="Acayucan">Acayucan</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Orizaba">Orizaba</option>
                            </select>-->

                            <select name="complejo">
                            <option value="false">-Selecciona un cine-</option>
                            <?php foreach($statement as $resultado): ?>
                            <?php 
                            
                            echo "<option value='$resultado[2]'>$resultado[2]</option>";
                            ?>
                            <?php endforeach; ?>
                                
                                
                              
                            </select>

                            <input type="submit" id="ver-cartelera" value="VER CARTELERA">
                        </form>
                    </div>
                    
                    <div class='login-usuario'>
                    <?php 
                    if( !empty($_SESSION['usuario']) ){
                        echo "<a href='profile.php'>
                            <img src='view/assets/images/logo-id.png' width='24px'>
                            <span>MiPerfil</span>
                        </a>";

                    }else{
                        echo "<a href='login.php'>
                            <img src='view/assets/images/logo-id.png' width='24px'>
                            <span>Iniciar sesión</span>
                        </a>";

                    }
                    
                    ?>
                        
                    </div>
                </nav>

                <div class="linea-dos">
                    <div class="linea-dos-container">
                        <div class="enlaces">
                            <div class="pe">Próximos eventos</div>
                            <div class="pr">Preventa</div>
                            <div class="cart">Cartelera</div>
                        </div>

                        <div class="social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fas fa-mobile-alt"></i></a>
                        </div>
                    </div>
                </div>
            </header>


                        <div class="slider">
                <a href="#">
                    <img src="view/assets/images/slider.jpg" width="100%">
                </a>
            </div>

            <div class="cartelera">
                <span class="titulo">EN CARTELERA AHORA MISMO</span>

                <div class="galeria">
                        <img src="view/assets/images/p-bohemian.jpg">
                        <img src="view/assets/images/p-grindelwald.jpg">
                        <img src="view/assets/images/p-venom.jpg">
                        <img src="view/assets/images/p-matar-o-morir.jpg">
                        <br>
                        <img src="view/assets/images/p-cascanueces.jpg">
                        <img src="view/assets/images/p-ralph.jpg">
                        <div class="ver-cartelera">
                            <a href="#">
                                CONSULTAR<br><br>
                                CARTELERA<br><br>
                                COMPLETA<br>
                            </a>
                        </div>
                </div>
            </div>
        </div>