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
            <span class="navbar-toggler-icon"></span>
            </input>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Αρχική <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link href="gamesindex.php">Παιχίδια</a>
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
                                <label for="question1"><h2>Νομίζω ότι θα ήθελα να χρησιμοποιώ αυτά τα παιχνίδια συχνά</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question2">
                                <label for="question2"><h2>Βρήκα αυτά τα παιχνίδια αδικαιολόγητα περίπλοκα</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question3">
                                <label for="question3"><h2>Σκέφτηκα ότι αυτά τα παιχνίδια ήταν εύκολα στη χρήση</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question4">
                                <label for="question4"><h2>Νομίζω ότι θα χρειαστώ βοήθεια από κάποιον ειδικό για να μπορέσω να χρησιμοποιήσω αυτά τα
                                παιχνίδια</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question5">
                                <label for="question5"><h2>Βρήκα τις διάφορες λειτουργίες σ’ αυτά τα παιχνίδια καλά ενσωματωμένες</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question6">
                                <label for="question6"><h2>Σκέφτηκα ότι υπήρχε μεγάλη ασυνέπεια στη λειτουργία των παιχνιδιών</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question7">
                                <label for="question7"><h2>Φαντάζομαι ότι οι περισσότεροι άνθρωποι θα μάθουν να χρησιμοποιούν αυτά τα παιχνίδια πολύ
                                γρήγορα</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question8">
                                <label for="question8"><h2>Βρήκα αυτά τα παιχνίδια πολύ δύσκολα/περίπλοκα στη χρήση</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question9">
                                <label for="question9"><h2>Ένιωσα πολύ σίγουρος/η χρησιμοποιώντας αυτά τα παιχνίδια</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="myQuestions">
                            <div name="question10">
                                <label for="question10"><h2>Χρειάστηκε να μάθω πολλά πράγματα πριν να μπορέσω να ξεκινήσω με αυτά τα παιχνίδια</h2></label>
                                </br>
                                Διαφωνώ
                                <input type="submit" value="1" name="1" class="btn btn-outline-danger btn-lg"></input>
                                <input type="submit" value="2" name="2" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="3" name="3" class="btn btn-outline-warning btn-lg"></input>
                                <input type="submit" value="4" name="4" class="btn btn-outline-dark btn-lg"></input>
                                <input type="submit" value="5" name="5" class="btn btn-outline-primary btn-lg"></input>
                                Συμφωνώ
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
            if (n > questions.length) {questionIndex = 1}
            if (n < 1) {questionIndex = questions.length}
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