<?php include 'access.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title>Αξιολόγηση</title>
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
            <input class="navbar-toggler" type="submit" value="" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </input>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Αρχική <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gamesindex.php">Παιχίδια</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="settings.php">Επιλογές</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php" role="submit">
                        Αποσύνδεση
                    </a>
                </form>
            </div>
        </nav>
        <div>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "webite";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $sql = "SELECT qID, description FROM surveyquestion";
            
            $conn->close();
            
            // Pass the values from the buttons to the db
            if(isset($_GET['question1'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '1', question1, '', '')";
            }
            if(isset($_GET['question2'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '2', question2, '', '')";
            }
            if(isset($_GET['question3'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '3', question3, '', '')";
            }
            if(isset($_GET['question4'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '4', question4, '', '')";
            }
            if(isset($_GET['question5'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '5', question5, '', '')";
            }
            if(isset($_GET['question6'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '6', question6, '', '')";
            }
            if(isset($_GET['question7'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '7', question7, '', '')";
            }
            if(isset($_GET['question8'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '8', question8, '', '')";
            }
            if(isset($_GET['question9'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '9', question9, '', '')";
            }
            if(isset($_GET['question10'])){
                $answers = "INSERT INTO surveyanswer (aID, qID, answer, userID, loginID) VALUES ('', '10', question10, '', '')";
            }

            ?>

        </div>
        
        <main role="main" class="container-fluid">
            <div class="row header">
                <div class="col-12 text-center header-message">
                    <!-- Question container -->
                    <div class="slideshow-container" method="_POST">
                        <!-- Questionaire in the form of a slideshow -->
                        <div class="myQuestions">
                            <div name="question1">
                                <form method="GET">
                                    <label for="question1"><h2>Νομίζω ότι θα ήθελα να χρησιμοποιώ αυτά τα παιχνίδια συχνά</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question1 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question1 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question1 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question1 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question1 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question2">
                                <form method="GET">
                                    <label for="question2"><h2>Βρήκα αυτά τα παιχνίδια αδικαιολόγητα περίπλοκα</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question2 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question2 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question2 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question2 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question2 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question3">
                                <form method="GET">
                                    <label for="question3"><h2>Σκέφτηκα ότι αυτά τα παιχνίδια ήταν εύκολα στη χρήση</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question3 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question3 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question3 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question3 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question3 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question4">
                                <form method="GET">
                                    <label for="question4"><h2>Νομίζω ότι θα χρειαστώ βοήθεια από κάποιον ειδικό για να μπορέσω να χρησιμοποιήσω αυτά τα
                                    παιχνίδια</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question4 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question4 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question4 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question4 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question4 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question5">
                                <form method="GET">
                                    <label for="question5"><h2>Βρήκα τις διάφορες λειτουργίες σ’ αυτά τα παιχνίδια καλά ενσωματωμένες</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question5 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question5 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question5 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question5 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question5 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question6">
                                <form method="GET">    
                                    <label for="question6"><h2>Σκέφτηκα ότι υπήρχε μεγάλη ασυνέπεια στη λειτουργία των παιχνιδιών</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question6 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question6 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question6 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question6 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question6 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question7">
                                <form method="GET">
                                    <label for="question7"><h2>Φαντάζομαι ότι οι περισσότεροι άνθρωποι θα μάθουν να χρησιμοποιούν αυτά τα παιχνίδια πολύ
                                    γρήγορα</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question7 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question7 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question7 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question7 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question7 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question8">
                                <form method="GET">   
                                    <label for="question8"><h2>Βρήκα αυτά τα παιχνίδια πολύ δύσκολα/περίπλοκα στη χρήση</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question8 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question8 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question8 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question8 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question8 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question9">
                                <form method="GET">
                                    <label for="question9"><h2>Ένιωσα πολύ σίγουρος/η χρησιμοποιώντας αυτά τα παιχνίδια</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question9 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question9 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question9 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question9 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question9 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question10">
                                <form method="GET">
                                    <label for="question10"><h2>Χρειάστηκε να μάθω πολλά πράγματα πριν να μπορέσω να ξεκινήσω με αυτά τα παιχνίδια</h2></label>
                                    </br>
                                    Διαφωνώ
                                    <input type="submit" data-toggle="button" value="1" name="1" class="question10 btn btn-outline-danger btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="2" name="2" class="question10 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="3" name="3" class="question10 btn btn-outline-warning btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="4" name="4" class="question10 btn btn-outline-dark btn-lg"></input>
                                    <input type="submit" data-toggle="button" value="5" name="5" class="question10 btn btn-outline-primary btn-lg"></input>
                                    Συμφωνώ
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Next/prev inputs -->
                    <button class="btn btn-light" onclick="plusQuestions(-1)">Προηγούμενη</button>
                    <button class="btn btn-dark" onclick="plusQuestions(1)">Επόμενη</button>
                </div>
            </div>
            </main><!-- /.container -->
            <script>
            var questionIndex = 1;
            showQuestions(questionIndex);
            
            function plusQuestions(n) {
                showQuestions(questionIndex += n);
            }
            function currentSlide(n) {
                showQuestions(questionIndex = n);
            }
            
            function showQuestions(n) {
                var i;
                var questions = document.getElementsByClassName("myQuestions");
                var dots = document.getElementsByClassName("dot");
                
                if (n > questions.length) {
                    questionIndex = 1
                }
                
                if (n < 1) {
                    questionIndex = questions.length
                }

                for (i = 0; i < questions.length; i++) {
                    questions[i].style.display = "none";
                }
                
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                
                questions[questionIndex-1].style.display = "block";
                dots[questionIndex-1].className += " active";
            }
            </script>
        </body>
    </html>