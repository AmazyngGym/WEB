<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Usuario - Gimnasio</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('class2.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.75); 
            padding: 20px;
            border-radius: 10px;
            width: auto;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #FFF;
            padding: 8px;
            text-align: left;
        }
        a {
            color: rgb(255, 194, 62); 
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Start the session
        session_start();

        // Check if form data was submitted
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Placeholder credentials for demo purposes
            $correct_username = "jansel";
            $correct_password = "jansel1";

            // Check credentials
            if($username === $correct_username && $password === $correct_password) {
                // Welcome message
                echo "<h2>Bienvenido, $username!</h2>";
                // Display a table of classes or schedules
                echo "<table>
                        <tr>
                            <th>Clase</th>
                            <th>Horario</th>
                            <th>Instructor</th>
                        </tr>
                        <tr>
                            <td>Fuerza</td>
                            <td>08:00 - 09:00 AM</td>
                            <td>Luis Balladares</td>
                        </tr>
                        <tr>
                            <td>Zumba</td>
                            <td>10:00 - 11:00 AM</td>
                            <td>Luis Balladares</td>
                        </tr>
                        <tr>
                            <td>Levantamiento de Pesas</td>
                            <td>12:00 - 01:00 PM</td>
                            <td>Luis Balladares</td>
                        </tr>
                    </table>";
            } else {
                $_SESSION['error'] = "Usuario o contraseña incorrectos.";
                header("location: index.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Debes completar ambos campos.";
            header("location: index.php");
            exit();
        }
        ?>
        <a href="../index.php">Volver al sitio principal</a>
    </div>
</body>
</html>
