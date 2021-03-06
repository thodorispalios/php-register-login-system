<?php include 'access.php'; ?>
<?php include 'pointsystem.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Αναγραμματισμός</title>
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
    
    <main role="main" class="container-fluid">
      <div class="spacer"></div>
      <div class="game">
        <div class="buttons">
          <button id="new" class="btn btn-primary btn-lg"> ΝΕΟ ΠΑΙΧΝΙΔΙ</button>
          <button id="reveal" class="btn btn-secondary btn-lg">ΕΛΕΓΧΟΣ</button>
        </div>
        <ul id="question" class="ul1">
        </ul>
        <ul id="solution" class="ul1">
        </ul>
      </div>
    </main>
    
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js'></script>
      <script>

          const solution = $('#solution');
          const newGame = $('#new');
          const reveal = $('#reveal');
          
          function revealHandler(answer) {
            reveal.click(function () {
              solution.empty();
              answer.split('').forEach((letter) => solution.append("<li>" + letter + "</li>"));
            });
          }

          const wordArrayEasy = {
            ["ΣΑΝΕ", "ΕΝΑΣ"],
            ["ΕΘΚΑ", "ΚΑΘΕ"],
            ["ΛΕΣΑ", "ΣΕΛΑ"],
            ["ΩΜΣΑ", "ΣΩΜΑ"],
            ["ΙΝΠΩ", "ΠΙΝΩ"],
          };

          const wordArrayMedium = {
            ["ΛΛΟΑΣ", "ΑΛΛΟΣ"],
            ["ΛΩΠΙΕ", "ΛΕΙΠΩ"],
            ["ΛΗΣΠΟ", "ΠΗΛΟΣ"],
            ["ΡΕΧΑΙ", "ΧΕΡΙΑ"],
            ["ΓΕΙΛΟ", "ΓΕΛΙΟ"]
          };

          const wordArrayHard = {
            ["ΟΕΡΝΤΔ", "ΔΕΝΤΡΟ"],
            ["ΣΚΡΔΕΟ", "ΚΕΔΡΟΣ"],
            ["ΔΙΑΜΗΣ", "ΣΗΜΑΔΙ"],
            ["ΚΤΥΜΑΑ", "ΚΥΜΑΤΑ"],
            ["ΣΑΤΑΜΩ", "ΣΩΜΑΤΑ"],
          };


          function startGame() {
            reset();
            let difficulty = "easy"; 
            
            if (difficulty === "easy"){
              let question = wordArrayEasy[Math.floor(Math.random() * wordArrayEasy.length)];
            }else if (difficulty === "medium"){
              let question = wordArrayMedium[Math.floor(Math.random() * wordArrayMedium.length)];
            }else if (difficulty === "hard"){
              let question = wordArrayHard[Math.floor(Math.random() * wordArrayHard.length)];
            }
            
            let scrambledArray = question[0].split('');
            
            scrambledArray.forEach((letter) => container.append("<li>" + letter + "</li>"));
            
            let answer = question[1];

            container.sortable({
              axis: "x",
              stop: function () {
                let attempt = "";
                
                container.children().each(function () {
                  attempt += $(this).text();
                });
                
                if (attempt === answer) {
                  solution.empty();
                  answer.split('').forEach((letter) => solution.append("<li>" + letter + "</li>"));

                }
              } 
            });

            revealHandler(answer);
          }

          newGame.click(startGame);
        </script>
  </body>
</html>