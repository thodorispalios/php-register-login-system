<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title>Επιλογές</title>
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
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Αρχική <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gamesindex.php">Παιχίδια</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active">Επιλογές</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php" role="button">
                        Αποσύνδεση
                    </a>
                </form>
            </div>
        </nav>
        <div>

            <?php
                if (isset($_POST['submit1'])){
                    $password = $_POST['password'];
                    
                    $sql = "UPDATE user SET password = $password WHERE username=$username";
                    $stmtinsert = $db->prepare($sql);
                    $result = $stmtinsert->execute([$password]);
                    if ($result){
                        echo 'Επιτυχής Ενημέρωση Κωδικού';
                    }else{
                        echo 'Αποτυχία Ενημέρωσης Κωδικού';
                    }
                }
                if (isset($_POST['submit2'])){
                    $city = $_POST['city'];
                    
                    $sql = "UPDATE user SET city = $city WHERE username=$username";
                    $stmtinsert = $db->prepare($sql);
                    $result = $stmtinsert->execute([$city]);
                    if ($result){
                        echo 'Επιτυχής Ενημέρωση Πόλης';
                    }else{
                        echo 'Αποτυχία Ενημέρωσης Πόλης';
                    }
                }
                if (isset($_POST['submit3'])){
                    $education = $_POST['education'];
                    
                    $sql = "UPDATE user SET education = $education WHERE username=$username";
                    $stmtinsert = $db->prepare($sql);
                    $result = $stmtinsert->execute([$education]);
                    if ($result){
                        echo 'Επιτυχής Ενημέρωση Επιπέδου Εκπαίδευσης';
                    }else{
                        echo 'Αποτυχία Ενημέρωσης Επιπέδου Εκπαίδευσης';
                    }
                }

            
            ?>

        </div>
        <main role="main" class="container-fluid">
            <div class="mt-3 pt-3">
                <div class="form-row">
                    <div class="col">
                        <h3>Αλλαγή Κωδικού</h3>
                        <hr class="mb-3">
                        <label for="password"><b>Νέος Κωδικός</b></label>
                        <input class="form-control" type="text" name="password" placeholder="password" required>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="submit1" value="Ενημέρωση"/>
                    </div>
                    <div class="col">
                        <h3>Αλλαγή Πόλης</h3>
                        <hr class="mb-3">
                        <label for="city"><b>Πόλη</b></label>
                        <input class="form-control" type="text" name="city" placeholder="Πόλη" required>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="submit2" value="Ενημέρωση"/>
                        <br>
                        <br>
                        <a href="evaluation.php" role="button" class="btn btn-info btn-lg btn-block">Αξιολογήστε τη Σελίδα</a>
                    </div>
                    <div class="col">
                        <h3>Εκπαίδευση</h3>
                        <hr class="mb-3">
                        <label for="education"><b>Εκπαίδευση</b></label>
                        <select name="education" class="form-control" required>
                            <option></option>
                            <option value="none">Καμία</option>
                            <option value="primaryschool">Δημοτκό</option>
                            <option value="secodaryschool">Γυμνάσιο</option>
                            <option value="highschool">Λύκειο</option>
                            <option value="university">Πανεπιστήμιο</option>
                        </select>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="submit3" value="Ενημέρωση"/>
                    </div>
                </div>
            </div>
        </main><!-- /.container -->
    </body>
</html>