<?php include 'access.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title>Παιχνίδια</title>
        <!--Template based on URL below-->
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Custom stylesheet-->
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Webite</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Αρχική <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Παιχίδια</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="settings.php">Επιλογές</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php" role="button">
                        Αποσύνδεση
                    </a>          
                </form>
            </div>
        </nav>
        <main role="main" class="container-fluid">
            <div class="text-center header-message">
                <h1>Παιχνίδια</h1>
                <div class="row text-center header">
                    <div class="col header-message" style="top:20%;">
                        <a href="anagram.php"><h2>Βρες τη Λέξη</h2></a>
                        <img src="img/anagram.png" style="width:50%;height: 50%;" href="anagram.php" class="img-fluid" alt="anagram">
                    </div>
                    <div class="col header-message" style="top:20%;">
                        <a href="glossa.php"><h2>Γλώσσα</h2></a>
                        <img src="img/glossa.png" style="width:50%;height: 50%;" class="img-fluid" alt="game2">
                    </div>
                </div>
            </div>
        </main><!-- /.container -->
    </body>
</html>