<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/pdo.php";

$head = file_get_contents( "templates/head.html" );
print $head;
?>
<div class="jumbotron text-center">
    <h1>My Pictures</h1>
    <h2>Of the world i'se seen so far</h2>
</div>

<div class="container">
    <div class="row">
        <?php
        $sql = GetData( "select * from images where img_id=" . $_GET['img_id'] );

        //$counter = 0;
        foreach ($sql as $row) {
            //$counter++;
            $row["img_location"] = ucfirst($row["img_location"]);
            $row["img_title"] = ucfirst($row["img_title"]);
            $string = $row["img_filename"];
            $location = rtrim($string,".jpeg");
            $link_image = "img/" . $row['img_filename'];
            echo '<div class="col-sm-12">';
            echo '<h3>'.$row["img_title"].'</h3>';
            echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloribus explicabo.</p>";
            echo '<p>'.$row["img_width"].' x '.$row["img_height"].' pixels'.'</p>';
            echo '<h4>'.'Location: '.$location.'</h4>';
            echo '<h5>'.'Place: '.$row["img_location"].'</h5>';
            echo '<figure><div class="img-hover-zoom img-hover-zoom--brightness stad"><img class="stad" src="' . $link_image . '"></div>
            <figcaption><p><a class="info" href="./steden2.php"><- Terug naar het overzicht</a></p></figcaption></figure></div>';
        }
        ?>
    </div>
</div>

</body>
</html>