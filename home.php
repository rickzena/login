<?php include_once 'verifica.php'; ?>

<!doctype html>
    <head>
        <title>SISTEMA DE LOGIN</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <div class="container">
            <header>
                <img class="mb-4" src="img/login.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Home</h1>
            </header>
            
            <section name='home'>
                <p>Bem-vindo <?php echo $_SESSION['nome']; ?>!</p>
            </section>

            <footer>
                <a href='logout.php'>Sair</a>
            </footer>
        </div>
    </body>
</html>