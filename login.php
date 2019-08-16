<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title>Σύνδεση</title>

        <!--Template based on URL below-->
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Place your stylesheet here-->
        <link href="/css/styles.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div>
            <?php
                session_start();

                $db = mysqli_connect("localhost", "root", "", "webite");

                if (isset($_POST['login_btn'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    
                    $sql = "SELECT userID, username, password FROM user WHERE username = '$username' AND password = '$password'";
                    $result = mysqli_query($db, $sql);

                    
                
                    if(mysqli_num_rows($result) == 1){
                        $_SESSION['message'] = "Επιτυχής Σύνδεση";
                        $_SESSION['username'] = $username;

                        //Καταγραφή του εκάστοτε login
                        $_SESSION['id']=$num['id']; // hold the user id in session                       
                        $date = date('Y-m-d H:i:s');
                        
                        $sql1 = mysqli_query($success, "INSERT INTO login(loginID, date, userID) VALUES ('date', 'userID')".$_POST['date'] AND $_SESSION['userID']);
                        $row = mysqli_num_rows($sql1);

                        //επιστροφή στο index
                        header("location: index.php");
                    }else {
                        $_SESSION['message'] = "Λανθασμένο όνομα χρήστη ή κωδικός";
                    }

            }                

            ?>
        </div>

        <div>
            <?php 
                if (isset($_SESSION['message'])){
                    echo "<div class='alert alert-danger' role='alert'>".$_SESSION['message']."</div>";
                    unset($_SESSION['message']);
                }
                
            ?>

        </div>

        <main role="main" class="container-fluid">

            <div class="text-center mt-3 pt-3">

                <form action="login.php" method="post">
                    <div class="form-row">
                        <div class="col">
                        </div>
                        <div class="col-sm-3">
                            <h1>Σύνδεση</h1>
                            <hr class="mb-3">
                            <label for="username"><b>Όνομα Χρήστη</b></label>
                            <input class="form-control" type="text" name="username" placeholder="Username" required>

                            <label for="password"><b>Κωδικός</b></label>
                            <input class="form-control" type="text" name="password" placeholder="Password" required>

                            <hr class="mb-3">
                            <input class="btn btn-primary" type="submit" name="login_btn" value="Σύνδεση" />

                            <input class="btn btn-secondary" onclick="window.location.href = 'register.php';" value="Εγγραφή" />

                        </div>
                        <div class="col">
                        </div>
                    </div>
                </form>
            </div>
        </main><!-- /.container -->
    </body>
</html>
