<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HTML 5 Boilerplate</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php 
        $name = "Dark Souls";
        $played = true;

        if ($played){
            $message = "You played $name";
        }else{
            $message = "You did NOT played $name";
        }
    ?>
    <h1>
       <?php echo $message; ?>
    </h1>

    <h2> <?= $message ?></h2>
</body>

</html>