<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <title>Formulario</title>
    </head>
    <body>
        <main>
            <div>
                <form method="post" action="card.php">
                    <p id="titulo">Registrar Alumno</p>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" class="campos" name="nombreA" required>

                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" class="campos" name="ApellidosB" required>

                    <label for="años">Edad</label>
                    <input type="number" ide="años" class="campos" min-length="1" max-length="2" name="edadC" required>

                    <label for="correo">Correo</label>
                    <input type="email" id="correo" class="campos" name="correoD" placeholder="email@dominio.com" required>
                    
                    <label for="contra">Contraseña</label>
                    <input type="password" id="contra" class="campos" placeholder="xxxxxxxxxx" required>

                    <input type="submit" value="Enviar datos" class="enviar">
                    
                </form>
            </div>
        </main>
    </body>
</html> 