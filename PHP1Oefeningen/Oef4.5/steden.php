<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";

PrintHead();
PrintJumbo();
PrintNavbar();
?>

<div class="container">
    <div class="row">
        <?php
        //toon messages als er zijn
        foreach ( $msgs as $msg )
        {
            print '<h1 class="alert alert-success msgs" role="alert">' . $msg . '</h1>';
        }

        //get data
        $rows = GetData( "select * from images" );

        //get template
        $template = file_get_contents("templates/column.html");

        //merge
        $html = MergeViewWithData( $template, $rows );
        print $html;
        ?>
    </div>
</div>

</body>
</html>