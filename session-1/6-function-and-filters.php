<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        $movies = [
            [
                'name' => 'Back to the Future',
                'releaseYear' => 1985,
            ],

            [
                'name' => "Weekend at Bernie's",
                'releaseYear' => 1989,
            ],

            [
                'name' => 'Pirates of the Caribbean',
                'releaseYear' => 2003,
            ],

            [
                'name' => 'Interstellar',
                'releaseYear' => 2014,
            ],
        ];

        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
        ];

        function filterByAuthor($books, $author)
        {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }

        // Extra Credit:
        // Research and apply the array_filter() function on your own.
        function filterByRecent($movies)
        {
            $filteredMovies = [];

            foreach ($movies as $movie) {
                if ($movie['releaseYear'] >= 2000) {
                    $filteredMovies[] = $movie;
                }
            }

            return $filteredMovies;
        }
    ?>

    <ul>
        <?php foreach (filterByRecent($movies) as $movie) : ?>
            <li>
                <?= $movie['name'] ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>