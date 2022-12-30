<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
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

        function filter($items, $key, $value)
        {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($item[$key] === $value) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        $filterdBooks = filter($books, 'author' ,'Philip K. Dick');

        // can be changed to this

        function filter1($items, $fn)
        {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($fn[$item]) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        $filterdBooks1 = filter1($books, function ($book){
            return $book['author'] === 'Philip K. Dick';
        });


        // Can be changed to this

        $filteredBooks1 = array_filter($books, function ($book) {
            return $book['author'] === 'Philip K. Dick';
        });

    ?>
    <ul>
        <?php foreach ($filterdBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>