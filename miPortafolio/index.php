<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head> 

<body>
    <!-- Encabezado -->
    <header> 
        <h1>Mi Portafolio</h1>
        <!-- Agregado id para cambiar el texto desde JS -->
        <p id="mensaje-bienvenida">Bienvenido a mi sitio web personal</p>
        <!-- Agregado botón para el punto A -->
        <button id="btn-cambiar-texto">Cambiar Mensaje</button>
    </header>

    <!-- Navegación -->
    <nav>
        <a href="#inicio">INICIO</a>
        <a href="#sobre-mi">Sobre mí</a>
        <a href="#proyectos">Proyectos</a>
        <a href="#habilidades">Habilidades</a>
        <a href="#contacto">Contacto</a>
        <a href="admin.php">Admin</a>
    </nav>

    <main>
        <!-- Sección de inicio -->
        <section id="inicio" class="seccion-inicio">
            <div class="seccion-inicio-contenido">
                <h2>Hola, soy Leo</h2>
                <p>Soy estudiante de TIID y estoy aprendiendo a programar</p>
                <a href="#proyectos" class="boton">Ver mis proyectos</a>
            </div>
        </section>

        <!-- Sección sobre mí -->
        <section id="sobre-mi">
            <h2>Sobre mí</h2>
            <div class="sobre-mi-contenido">
                <img src="" alt="Imagen personal">
                <div>
                    <p>Algo sobre mi imagen</p>
                    <p>En esta práctica estoy aprendiendo HTML & CSS</p>
                </div>
            </div>
        </section>

        <!-- Sección de proyectos -->
        <section id="proyectos" class="contenedor-proyectos">  
            <h2>Mis Proyectos</h2>
            <div>   
                <article class="proyecto">
                    <h3>Sistema de algo 1</h3>
                    <p>Descripción del sistema</p>
                    <a href="">Ver Proyecto</a>
                </article>
                <article class="proyecto">
                    <h3>Sistema de algo 2</h3>
                    <p>Descripción del sistema</p>
                    <a href="">Ver Proyecto</a>
                </article>
            </div>
        </section>

        <!-- Sección de habilidades -->
        <section id="habilidades">
            <h2>Mis Habilidades</h2>
            <!-- Agregada clase 'caja-habilidad' a cada elemento -->
            <ul class="lista-habilidades">
                <li class="caja-habilidad">JAVA</li>
                <li class="caja-habilidad">SCRATCH</li>
                <li class="caja-habilidad">PSint</li>
                <li class="caja-habilidad">Packet Tracer</li>
                <li class="caja-habilidad">MySQL</li>
            </ul>
            <!-- Agregados los 2 botones requeridos para el punto B -->
            <button id="btn-cambiar-color">Cambiar color</button>
            <button id="btn-cambiar-fuente">Cambiar tipo de letra</button>
        </section>

        <!-- Seccion de contacto -->
        <section id="contacto">
            <h2>Contactame</h2>
            <!-- Agregado id 'form-contacto' para el punto C -->
<form id="form-contacto" action="guardar_mensaje.php" method="post">
  <div class="campo">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="txtnombre" placeholder="Escribe tu nombre" required>
  </div>

  <div class="campo">
    <label for="correo">Correo electronico</label>
    <input type="email" id="correo" name="txtcorreo" placeholder="ejemplo@correo.com" required>
  </div>

  <div class="campo">
    <label for="mensaje">Mensaje</label>
    <textarea id="mensaje" name="txtmensaje" rows="5" placeholder="Escribe tu mensaje" required></textarea>
  </div>

  <button type="submit">Enviar mensaje</button>
</form>

        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p> 2026 Mi Portafolio</p>
        <p>Práctica de Programación Web</p>
    </footer>

    <!-- Vinculación del archivo JS independiente -->
    <script src="./js/script.js"></script>
</body>
</html>
