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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
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
                    <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php" role="button">
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

                $sql = "SELECT description FROM surveyquestion";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row['description'];
                    }

                } else {
                    echo "0 results";
                }
                $conn->close();
            
            ?>
        </div>
        
        <main role="main" class="container-fluid">
            <div class="row header">
                <div class="col-12 text-center header-message">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                        <!-- Questionaire in the form of a slideshow -->
                        <div class="mySlides">
                            <div name="question1">
                                <h2>Νομίζω ότι θα ήθελα να χρησιμοποιώ αυτά τα παιχνίδια συχνά</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="mySlides">
                            <div name="question2">
                                <h2>Βρήκα αυτά τα παιχνίδια αδικαιολόγητα περίπλοκα</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="mySlides">
                            <div name="question3">
                                <h2>Σκέφτηκα ότι αυτά τα παιχνίδια ήταν εύκολα στη χρήση</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="mySlides">
                            <div name="question4">
                                <h2>Νομίζω ότι θα χρειαστώ βοήθεια από κάποιον ειδικό για να μπορέσω να χρησιμοποιήσω αυτά τα
                                παιχνίδια</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="mySlides">
                            <div name="question5">
                                <h2>Βρήκα τις διάφορες λειτουργίες σ’ αυτά τα παιχνίδια καλά ενσωματωμένες</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="mySlides">
                            <div name="question6">
                                <h2>Σκέφτηκα ότι υπήρχε μεγάλη ασυνέπεια στη λειτουργία των παιχνιδιών</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="mySlides">
                            <div name="question7">
                                <h2>Φαντάζομαι ότι οι περισσότεροι άνθρωποι θα μάθουν να χρησιμοποιούν αυτά τα παιχνίδια πολύ
                                γρήγορα</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="mySlides">
                            <div name="question8">
                                <h2>Βρήκα αυτά τα παιχνίδια πολύ δύσκολα/περίπλοκα στη χρήση</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="mySlides">
                            <div name="question9">
                                <h2>Ένιωσα πολύ σίγουρος/η χρησιμοποιώντας αυτά τα παιχνίδια</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                        <div class="mySlides">
                            <div name="question10">
                                <h2>Χρειάστηκε να μάθω πολλά πράγματα πριν να μπορέσω να ξεκινήσω με αυτά τα παιχνίδια</h2>
                                Διαφωνώ
                                <button type="button" class="btn btn-outline-danger btn-lg">1</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">2</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">3</button>
                                <button type="button" class="btn btn-outline-dark btn-lg">4</button>
                                <button type="button" class="btn btn-outline-primary btn-lg">5</button>
                                Συμφωνώ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Next/prev buttons -->
                    <button class="btn btn-light" onclick="plusSlides(-1)">Προηγούμενη</button>
                    <button class="btn btn-dark" onclick="plusSlides(1)">Επόμενη</button>
                </div>
            </div>
            </main><!-- /.container -->
            <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }
            function currentSlide(n) {
            showSlides(slideIndex = n);
            }
            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            }
            </script>
        </body>
    </html>