<?php
$filename = export_btw;
function PrintCSVHeader( $filename )
{
    $contents="Land,BTW Code,Hyperlink\n";
    $user_query = "select * from eu_btw_codes order by id";
    foreach ($user_query as $row) {
        $contents.=$row['eub_land'].";";
        $contents.=$row['eub_code'].";";
        $contents.="<a href='https://nl.wikipedia.org/wiki/'>https://nl.wikipedia.org/wiki/".$row['eub_land']."</a>\r\n";

    }
    // CSV header
    header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
    header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Type: application/csv-tab-delimited-table");
    header("Content-disposition: attachment; filename=".$filename.".csv");

    //this line tells Excel that the character set is UTF-8
    //so make sure to convert your output to UTF-8 if needed
    echo "\xEF\xBB\xBF";
}
