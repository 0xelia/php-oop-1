<?php

include __DIR__ . '/api/movies.php';

$cast_movie_1 = [
    'Johnny Depp',
    'Orlando Bloom',
    'Keira Knightley',
    'Geoffrey Rush'
];

$cast_movie_2 =[
    'Tobey Maguire',
    'Kirsten Dunst',
    'Willem Dafoe',
    'James Franco',
];



$movie_1 = new Movie ('Pirates of Caribbean', 'US', 'https://m.media-amazon.com/images/M/MV5BNGYyZGM5MGMtYTY2Ni00M2Y1LWIzNjQtYWUzM2VlNGVhMDNhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX67_CR0,0,67,98_AL_.jpg' , 2003, $cast_movie_1);
$movie_2 = new Movie ('Spider Man', 'US', 'https://imgs.search.brave.com/ZPmDgcIkBqajmkXmN56tq8lvhiXy9Mza4caDSh5wWtw/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9pbWFn/ZS50bWRiLm9yZy90/L3Avb3JpZ2luYWwv/OFlON2RZbUpoVnZO/NmtPZ0JBTmxtb05p/WXNkLmpwZw', 2002, $cast_movie_2);

var_dump($movie_1, $movie_2);

