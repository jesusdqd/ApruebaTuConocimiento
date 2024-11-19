<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprueba tu conocimiento</title>
    <link rel="stylesheet" href="Css/estilos.css">
    <link rel="stylesheet" href="Css/barra_navegacion.css">
    <link rel="stylesheet" href="Css/areas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
            margin: 0;
        }
        footer {
            background-color: #1A1A1D; 
            text-align: center; 
            padding: 20px;
            width: 100%; 
            position: relative; 
            margin: 0;
            box-sizing: border-box; 
            border-bottom: 3px solid #D4AF37; 
            border-radius: 15px;
        }

      .footer-links {
            display: flex;
            justify-content: center;
            gap: 50px;
            
        }

        .footer-container {
            width: 100%;
            padding: 10px 0; 
        }

      .footer-content{
            width: 100%;
            margin: 0;
            padding: 0;
            
        }

      .footer-links a {
            color: #fff;
            text-decoration: none;
            
        }

      .footer-links-container {
            display: flex;
            justify-content: center;
            
        }
        /*
        .footer {
            text-align: center; 
            position: relative; 
            bottom: 0; 
            width: 90%; 
            margin: 0 auto;
            padding: 20px ; 
            color: #fff; 
            font-size: 12px;
        }
        */
    </style>
</head>
<body>
    <?php include('Html/navbar.html'); ?>
    <?php include('Html/Areas/areas.html'); ?> 
    <?php include('chatbox.html'); ?>
    <main>
    <footer>
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-links-container">
                <div class="footer-links">
                    <a href="#">NOVEDADES</a>
                    <a href="#">CONTACTO</a>
                    <a href="#">RESEÑAS</a>
                    <a href="#">PUBLICIDAD</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--
<div class="footer">
            <p>Este proyecto se basa en una página web en la cual puedas probar, desafiar y mejorar tus límites y conocimientos a través de exámenes, juegos, quiz, etc. Al entrar por primera vez a nuestra pagina te encontraras con la posibilidad de iniciar sesión con la plataforma que quieras ya sea Google, Facebook, etc para que tengas total libertad de invitar e incluso desafiar a tus amigos, al iniciar sesión verás una amplia variedad de áreas o materias entre ellas matemáticas, biología, arte, política, informática, etc tendrás la posibilidad de escoger tu respectivo nivel o grado de dificultad la cual se ajusta adecuadamente a todas las categorías a escoger, ademas contaras con una IA la cual se encargará de evaluar tu conocimiento ya sea a través de porcentajes o mediante aprobado o reprobado, aparte de la posibilidad de hacerle preguntas de las dudas que tengas por resolver. En nuestro sitio web hay distintos tipos de juegos para entrenar tu conocimiento entre los cuales se encuentran: sopa de letras, crucigramas, verdadero o falso,juegos de memoria, juego del ahorcado, etc. Para motivarte más a desafiarte a ti y a tus amigos agregaremos una tabla de ranking en la cual podrás luchar por entrar entre los más inteligentes de nuestra plataforma.
            </p>
    </div>  
    -->
</body>
</html>
