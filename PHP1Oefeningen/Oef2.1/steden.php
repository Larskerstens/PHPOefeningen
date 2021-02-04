<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$images = array(
    "austria.jpeg",
    "croatia.jpeg",
    "italy.jpeg",
    "norway.jpeg",
    "portugal.jpeg",
    "slovenia.jpeg",
    "spain.jpeg",
    "swiss.jpeg",
    "thailand.jpeg",
    "belgium.jpeg",
    "sweden.jpeg",
    "denmark.jpeg"
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>World pics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='../+CSS/style.css'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="jumbotron text-center">
    <h1>My Pictures</h1>
    <h2>Of the world i'se seen so far</h2>
</div>

<div class="container">
    <div class="row">
        <?php
        $counter = 0;
        foreach ($images as $image) {
            $counter++;
            echo "<div class=\"col-sm-4\">
                    <h3>Column $counter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloribus explicabo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, mollitia.</p>
                    <div class=\"img-hover-zoom img-hover-zoom--colorize\"><img src='img/$image'></div></div>";
        }
        ?>
    </div>
</div>

</body>
</html>