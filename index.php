<?php

include __DIR__ . '/api/movies.php';

$cast_movie_1 = [
    'Johnny Depp',
    'Orlando Bloom',
    'Keira Knightley',
    'Geoffrey Rush'
];

$votes_movie_1 = [10,8,9,8,10];
$votes_movie_2 = [7,8,6,5,7,7];

$cast_movie_2 =[
    'Tobey Maguire',
    'Kirsten Dunst',
    'Willem Dafoe',
    'James Franco',
];



$movie_1 = new Movie ('Pirates of Caribbean', 'US', 110, 'https://imgs.search.brave.com/krdrb_tRJDfrvSHtsioKP5fyclujrGYEb-LgjO_1U9A/rs:fit:300:444:1/g:ce/aHR0cHM6Ly9saDMu/Z29vZ2xldXNlcmNv/bnRlbnQuY29tL3By/b3h5L2FLczBaRWxa/eWpCMUV5d25mN3lj/NVRmcEdzTURoS3BZ/QlFJT0VKcFhDZkpP/eTF4R0hlSFd1NUky/R1RvZGwzUWpmOW81/czdYN2FjS2I1WXFM/blBWOGdVWXhUeHpv/MHUyM2VDVndxZEEx/RFJ6cnVzbmoyUlJq/UG5LSnFqeUVjajF0/eW9xUkY3bE8zSS1f/N1NFNmxhN1ZrMjM0/TjNzYVF3PXc2ODA' , 2003, $cast_movie_1);
$movie_2 = new Movie ('Spider Man', 'US', 130, 'https://imgs.search.brave.com/ZPmDgcIkBqajmkXmN56tq8lvhiXy9Mza4caDSh5wWtw/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9pbWFn/ZS50bWRiLm9yZy90/L3Avb3JpZ2luYWwv/OFlON2RZbUpoVnZO/NmtPZ0JBTmxtb05p/WXNkLmpwZw', 2002, $cast_movie_2);

$movies = [$movie_1, $movie_2];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie cards</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Movie cards
        </h1>
    </header>
    <main>
        <div class="container">
            <ul class="movies">
                <?php
                    foreach($movies as $movie){
                        ?>
                        <li class="movie_card">
                            <figure class="poster">
                                <img src="<?= $movie->poster ?>" alt="">
                            </figure>
                            <div class="back_side">
                                <h3>
                                    <?= $movie->title ?>
                                </h3>
                                <div class="movie_info">
                                    <p><?= $movie->year ?></p>
                                    <p id="no_dot"><?= $movie->duration ?> min</p>
                                </div>
                                <button class="card_btn">
                                    Watch Now
                                </button>
                            </div>
                        </li>
                        <?php
                    }
                ?>
            </ul>
        </div>
    </main>

</body>
</html>