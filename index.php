
<?php
    __DIR__ . "/classes/Movie.php";
    $padrino = new Movie("Il Padrino","Francis Ford Coppola","USA","1972","Drammatico", "Marlon Brando, Al Pacino, James Caan");
    $batman = new Movie("Batman Begins","Christopher Nolan","USA","2005","Azione", "Christian Bale, Michael Caine, Morgan Freeman");
    $pulp = new Movie("Pulp Fiction","Quentin Tarantino ","USA","1994","Azione", "John Travolta, Samuel L. Jackson, Uma Thurman");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <img src="https://fontmeme.com/permalink/211102/c072857f28ffed69c9266a55183f4c20.png" alt="">
        <div class="container-film">
            <div class="film">
                <h2>
                Titolo:<?php echo $padrino->getTitle()?>
                </h2>
                <h3>
                    Regista:<?php echo $padrino->getDirector()?>
                </h3>
                <h3>
                    Paese:<?php echo $padrino->getCountry()?>
                </h3>
                <h3>
                    Anno:<?php echo $padrino->getYear()?>
                </h3>
                <h3>
                    Genere:<?php echo $padrino->getGenre()?>
                </h3>
                <h3>
                    Cast:<?php echo $padrino->getCast()?>
                </h3>
            </div>
            <div class="film">
                <h2>
                Titolo:<?php echo $batman->getTitle()?>
                </h2>
                <h3>
                    Regista:<?php echo $batman->getDirector()?>
                </h3>
                <h3>
                    Paese:<?php echo $batman->getCountry()?>
                </h3>
                <h3>
                    Anno:<?php echo $batman->getYear()?>
                </h3>
                <h3>
                    Genere:<?php echo $batman->getGenre()?>
                </h3>
                <h3>
                    Cast:<?php echo $batman->getCast()?>
                </h3>
            </div>
            <div class="film">
                <h2>
                Titolo:<?php echo $pulp->getTitle()?>
                </h2>
                <h3>
                    Regista:<?php echo $pulp->getDirector()?>
                </h3>
                <h3>
                    Paese:<?php echo $pulp->getCountry()?>
                </h3>
                <h3>
                    Anno:<?php echo $pulp->getYear()?>
                </h3>
                <h3>
                    Genere:<?php echo $pulp->getGenre()?>
                </h3>
                <h3>
                    Cast:<?php echo $pulp->getCast()?>
                </h3>
            </div>
        </div>
    </div>
</body>
</html>