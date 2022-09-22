<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cbcb6ed7b6.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Grandstander&family=Open+Sans:wght@400;600&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>Anime Master</title>
</head>
<body>
<div id="login">
    <h1>Uni Baisa</h1>
    <h2>Login Here</h2>
    <form method="UPDATE" action="tablaMateriasUsuario.php">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter Username">

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">

        <input type="submit" class="btn">

        <div id="error" role="alert"></div>
    </form>
</div>
</body>
</html>