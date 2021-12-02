<?php
require_once __DIR__ . "/classes/Movie.php";

require_once __DIR__ . "/components/pageHead.php"

//var_dump($movie1->getDataMovie($data));

/* foreach ($moviesList as $item) {
    $movie = new Movie($item);
    var_dump($movie);
} */

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once __DIR__ . "/data/moviesData.php"; ?>
<body>
    <main>
        <div class="ps-4">
            <h1>Lista Film</h1>
            <ul>
                <?php 
                    foreach ($moviesList as $key => $item) {
                        $movie = new Movie($item);                      
                        //var_dump($movie->getDataMovie("year"));
                        //echo $movie->getDataMovie("year");

                        echo "<h3>" . $movie->getDataMovie("title") . "</h3>";
                        echo "<ul>";
                            echo "<li> Anno di uscita: " . $movie->getDataMovie("year") . "</li>";
                            echo "<li> Lingua: " . $movie->getDataMovie("language") . "</li>";
                            echo "<li> Titolo originale: " . $movie->getDataMovie("originalTitle") . "</li>";
                        echo "</ul>";                      
                    }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>