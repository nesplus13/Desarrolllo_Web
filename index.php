<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal para Estudiantes Universitarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
        }
        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
        }
        nav a:hover {
            color: #007bff;
        }
        section {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Portal Estudiantil Universitario</h1>

    </header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Cursos</a>
        <a href="#">Calificaciones</a>
        <a href="#">Contacto</a>
    </nav>
    <section>
        <h2>Bienvenido al Portal jojojo Estudiantil Universitario</h2>
        <p>¡Aquí podrás encontrar información sobre tus cursos, calificaciones y más!</p>
    </section>
    <h2>Formulario de Registro</h2>
    <form  action = "registro.php"     method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad" required><br>
        <input type="submit" value="Enviar"><br><br>
        <input type="submit" value="nuevo"><br><br>
        <br><br>
    </form>
    <br><br>
    <footer>
        <p>&copy; 2024 Portal para Estudiantes Universitarios</p>
    </footer>
</body>
</html>
