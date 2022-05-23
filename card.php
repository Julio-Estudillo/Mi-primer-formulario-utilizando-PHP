<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="card.css">
        <title>Alumno</title>
    </head>
    <body>
        <main>
            <div>
            <p>Estos son tus datos</p>
                <img id="muñeco" src="muñeco.png">
                <table border="1" width="200" height="150">
                    <thead>
                        <tr>
                            <th>Nombres del alumno</th>
                            <th>Apellidos del alumno</th>
                            <th>Edad del alumno</th>
                            <th>Correo del alumno</th>
                        </tr>
                    </thead>
                        <tbody style="text-align: center;">
                            <tr>
                                <td><?php echo $_POST["nombreA"]."<br>"?></td>
                                <td><?php echo $_POST["ApellidosB"]."<br>"?></td>
                                <td><?php echo $_POST["edadC"]."<br>"?></td>
                                <td><?php echo $_POST["correoD"]."<br>"?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</html>