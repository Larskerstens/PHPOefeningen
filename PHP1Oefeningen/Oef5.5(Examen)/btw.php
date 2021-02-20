<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "BTW Codes in Europa", $subtitle = "" );
PrintNavbar();
?>


<div class="container">
    <div class="row">
        <a class="btn btn-info export" href="lib/export_btw.php">Export CSV</a>

    <table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Land</th>
        <th scope="col">BTW Code</th>
        <th scope="col">Edit</th>
    </tr>
    </thead>
    <tbody>
    <?php

    //$data = GetData( "select * from eu_btw_codes where eub_id=" . $_GET['eub_id'] );
    //$rowone = $data[0]; //there's only 1 row in data
    $rows = GetData( "select * from eu_btw_codes" );
    foreach ($rows as $row) {
        echo "<tr>";
        echo '<td><a target="_blank" href="https://nl.wikipedia.org/wiki/' . trim($row['eub_land']) . '">'.$row["eub_land"].'</a></td>';
        echo "<td>" . $row["eub_code"] . "</td>";
        echo '<td><a class="btn btn-info" href="btw_form.php?eub_id=@eub_id@">Edit</a></td>';
        echo "</tr>";

    }
    ?>
    </tbody>
</table>
    </div>
</div>

</body>
</html>