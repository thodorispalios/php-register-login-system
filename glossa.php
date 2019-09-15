<?php include 'access.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title>Γλώσσα</title>
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
                        <a class="nav-link" href="gamesindex.php">Παιχίδια</a>
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
          <div class="spacer"></div>
            <div class="game">
              <div class="buttons">
                <button id="new" class="btn btn-primary btn-lg"> ΝΕΟ ΠΑΙΧΝΙΔΙ</button>
                    <div class="dropdown">
                      <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ΔΥΣΚΟΛΙΑ
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="difficulty">
                        <a class="dropdown-item" id="easy">ΕΥΚΟΛΟ</a>
                        <a class="dropdown-item" id="medium">ΜΕΣΑΙΟ</a>
                        <a class="dropdown-item" id="hard">ΔΥΣΚΟΛΟ</a>
                      </div>
                    </div>
                  <button id="reveal" class="btn btn-secondary btn-lg">ΕΛΕΓΧΟΣ</button>
                </div>
              <div id="word"></div>
            <div id="solution" ></div>
          </div>
        </main>
    
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js'></script>
      <script>

          const solution = $('#solution');
          const newGame = $('#new');
          const reveal = $('#reveal');
          const difficulty = $('easy');
          
          function revealHandler(answer) {
            reveal.click(function () {
              solution.empty();
            });
          }
          
          const wordArraySynonyms = {
            ["ΑΒΑΤΟΣ", "ΒΑΤΟΣ", "ΑΠΡΟΣΕΚΤΟΣ", "ΑΔΙΑΒΑΤΟΣ", "ΥΠΟΦΕΡΤΟΣ", "ΒΛΑΒΕΡΟΣ", "ΒΟΛΙΚΟΣ"],
            ["ΓΝΗΣΙΟΣ", "ΠΛΑΣΤΟΣ", "ΨΕΥΤΙΚΟΣ", "ΣΤΑΣΙΜΟΣ", "ΑΛΗΘΙΝΟΣ", "ΡΗΧΟΣ", "ΑΓΝΟΣ"],
            ["ΑΛΛΟΚΟΤΟΣ", "ΠΑΡΟΡΜΗΤΙΚΟΣ", "ΠΑΡΑΞΕΝΟΣ", "ΑΝΑΜΕΝΟΜΕΝΟΣ", "", "", ""],
          };

          const wordArrayAntonyms = {
            ["ΑΛΤΡΟΥΙΣΜΟΣ", "ΑΤΟΜΙΣΜΟΣ", "ΣΤΑΔΙΑΚΟΣ", "ΝΟΣΤΙΜΟΣ", "ΑΝΑΜΕΝΟΜΕΝΟΣ", "", ""],
            ["", "", "", "", "", "", ""],
          };


          function startGame() {
            reset();

            if (difficulty === "easy"){
              let question = wordArraySynonyms[Math.floor(Math.random() * wordArraySynonyms.length)];
              let question = wordArraySynonyms[Math.floor(Math.random() * wordArraySynonyms.length)];
            }else if (difficulty === "medium"){
              let question = wordArrayAntonyms[Math.floor(Math.random() * wordArrayAntonyms.length)];
              let question = wordArrayAntonyms[Math.floor(Math.random() * wordArrayAntonyms.length)];
            }else if (difficulty === "hard"){
              let question = wordArraySynonyms[Math.floor(Math.random() * wordArraySynonyms.length)];
              let question = wordArrayAntonyms[Math.floor(Math.random() * wordArrayAntonyms.length)];
            }
            
            let answer = question[1];

            container.sortable({
              axis: "x",
              stop: function () {
                
                if (attempt === answer) {
                  solution.empty();

                }
              } 
            });

            revealHandler(answer);
          }

          newGame.click(startGame);
        </script>
        </main><!-- /.container -->
    </body>
</html>