<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title>Εγγραφή</title>

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
                if (isset($_POST['register_btn'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $gender = $_POST['gender'];
                    $city = $_POST['city'];
                    $education = $_POST['education'];
                    $birthdate = $_POST['birthdate'];    
                    
                    $sql = "INSERT INTO user (username, password, gender, city, education, birthdate) VALUES (?,?,?,?,?,?)";
                    $stmtinsert = $db->prepare($sql);
                    $result = $stmtinsert->execute([$username, $password, $gender, $city, $education, $birthdate]);
                    if ($result){
                        echo 'Επιτυχής Δημιουργία Χρήστη';
                    }else{
                        echo 'Αποτυχία Δημιουργίας Χρήστη';
                    }
                }   
            
            ?>

        </div>

        <main role="main" class="container-fluid">

            <div class="text-center mt-3 pt-3">

                <form action="register.php" method="post">
                    <div class="form-row">
                        <div class="col">
                        </div>
                        <div class="col-sm-3">
                            <h1>Εγγραφή</h1>
                            <hr class="mb-3">
                            <label for="username"><b>Όνομα Χρήστη</b></label>
                            <input class="form-control" type="text" name="username" placeholder="Username" required>

                            <label for="password"><b>Κωδικός</b></label>
                            <input class="form-control" type="text" name="password" placeholder="password" required>

                            <label for="gender"><b>Φύλο</b></label>
                            <select name="gender" class="form-control" required>
                                <option></option>
                                <option value="male">Αρσενικό</option>
                                <option value="female">Θηλυκό</option>
                            </select>

                            <label for="city"><b>Πόλη</b></label>
                            <input class="form-control" type="text" name="city" placeholder="Πόλη" required>

                            <label for="education"><b>Εκπαίδευση</b></label>
                            <select name="education" class="form-control" required>
                                <option></option>
                                <option value="none">Καμία</option>
                                <option value="primaryschool">Δημοτκό</option>
                                <option value="secodaryschool">Γυμνάσιο</option>
                                <option value="highschool">Λύκειο</option>
                                <option value="university">Πανεπιστήμιο</option>
                            </select>

                            <label for="birthdate"><b>Ημ. Γέννησης</b></label>
                            <input type="date" id="start" class="form-control" name="birthdate" min="1910-01-01" required>

                            <hr class="mb-3">
                            <input class="btn btn-primary" type="submit" name="register_btn" value="Εγγραφή" />

                        </div>
                        <div class="col">
                        </div>
                    </div>
                </form>

            </div>
        </main><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

</html>
