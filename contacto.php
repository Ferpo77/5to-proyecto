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
        <main class="contenedor">
            <h1> Contacto</h1>
            <picture>
                <source srcset="build/img/destacada3.webp" type="image/webp">
                <source srcset="build/img/destacada3.jpg" type="image/jpg">
                <img src="build/img/destacada3.jpg" alt="imagen contacto">
            </picture>
            <h2>Llene el Formulario de Contacto</h2>
            <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="Nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="Nombre">
                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu E-mail" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu Telefono" id="telefono">

                <label for="Mensaje">Nombre</label>
                <textarea name="mensaje" id="Mensaje" cols="30" rows="10"></textarea>
            </fieldset>

            <Fieldset>
                <legend>Informacion Sobre la Propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select  id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="compra">Compra</option>
                    <option value="venta">Venta</option>
                </select>   

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
            </Fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="Telefono" id="contactar-telefono">
                    <label for="contactar-email">Telefono</label>
                    <input name="contacto" type="radio" value="E-MAIL" id="contactar-email">


                </div>
                <p>Si eligió telefono, elija la fecha y la hora</p>
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">
                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde" >
        </form>
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