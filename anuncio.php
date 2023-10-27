<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENES RAICES</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                <img src="build/img/logo.svg" alt="imagen logo">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="menu mobile">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg" alt="luna">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>

                    </nav>
                </div>
            </div>
            
            
            
        </div>
    </header>
        <main class="contenedor seccion contenido-centrado">
            <h1> Casa con Alberca</h1>
            <picture>
                <source src="build/img/destacada.webp" type="image/webp">
                <source src="build/img/destacada.jpg" type="image/webp">
                <img loading="lazy" src="build/img/destacada.jpg" alt="imagen" >
            </picture>
            <div class="contenido-anuncio">
                <p class="precio">$3.000.000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img src="build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>

                <p>
                    Fusce hendrerit enim non dolor dapibus, nec mattis eros venenatis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum sit amet consectetur sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin non augue vel augue pretium accumsan. Vestibulum id lorem eget lacus rutrum tristique ut quis velit. Curabitur pellentesque nunc eget enim scelerisque tristique. Morbi velit enim, efficitur id ante non, iaculis fringilla lectus. Proin laoreet neque sit amet tortor gravida, id condimentum nunc dapibus. Quisque sit amet magna lectus. Integer volutpat augue vitae scelerisque tempor. Ut sit amet mi non augue dapibus volutpat. Phasellus et lorem tortor.
                </p>
        </main>

        <footer class="footer seccion">
            <div class="contenedor contenedor-footer">
                <nav class="navegacion">
                    <a href="nosotros.html">Nosotros</a>
                    <a href="anuncios.html">Anuncios</a>
                    <a href="blog.html">Blog</a>
                    <a href="contacto.html">Contacto</a>

                </nav>
            </div>

            <p class="copyright">Todos los derechos Reservados 2023 &copy;</p>
            
        </footer>
        <script src="build/js/bundle.min.js"></script>
    
</body>
</html>