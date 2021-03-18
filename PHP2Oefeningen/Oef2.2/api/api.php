<?php
$public_access = true;
require_once "../lib/autoload.php";

//Allow access from outside (see CORS)
//header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Origin: 'https://localhost'");
header("Access-Control-Allow-Credentials 'true'");


//Allow GET, POST, PUT, DELETE, OPTIONS http methods
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

//Allow some types of headers
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

//Set response content type and character set
header("Content-Type: application/json; charset=UTF-8");

//Basic Authentication controle
if ( $_SERVER['PHP_AUTH_USER'] !== "user123" OR $_SERVER['PHP_AUTH_PW'] !== "some_very_long_password_abcde_98765_dsf8765ezr4sdf8f7" )
{
    //als er geen juiste credentials doorgegeven worden, afbreken met code 401 Unauthorized
    header('WWW-Authenticate: Basic realm="Provide your username and password for the Voorbeeld API"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}

$method = $_SERVER['REQUEST_METHOD'];
$request_uri = $_SERVER['REQUEST_URI'];

$parts = explode("/", $request_uri);
$dbManager = $container->getDBManager();

//zoek "rest" in de uri
for ( $i=0; $i<count($parts) ;$i++)
{
    if ( $parts[$i] == "rest" )
    {
        break;
    }
}

$request_part = $parts[$i+2];
if ( count($parts) > $i + 3 ) $id = $parts[$i + 3];

//alle btw code
if ( $method == "GET" AND $request_part == "btwcodes" )
{
    $sql = "select * from eu_btw_codes";
    // ... execute $sql
    print json_encode( $dbManager->getData($sql) ) ;
}

//één btw code
if ( $method == "GET" AND $request_part == "btwcode" )
{
    $sql = "select * from eu_btw_codes where eub_id='$id'";
    // ... execute $sql
    print json_encode( $dbManager->getData($sql) ) ;
}

//update speler
if ($method == "PUT" and $request_part == "btwcode") {
    $sql = "select * from eu_btw_codes where eub_id=$id";
    $data = $container->getDBManager()->GetData( $sql , 'assoc' );
    if ($data) {
        $contents = json_decode(file_get_contents("php://input"));
        $newcode = $contents->code;
        $newland = $contents->land;

        $sql = "UPDATE eu_btw_codes SET eub_land = '$newland', eub_code = '$newcode' WHERE eub_id = $id";
        $data = $container->getDBManager()->ExecuteSQL($sql);
        print json_encode(["msg" => "gelukt"]);
        exit;
    } else {
        print json_encode(["msg" => 'mislukt']);
        exit;
    }
}

//delete btw code
if ( $method == "DELETE" AND $request_part == "btwcode" )
{
    $sql = "DELETE FROM eu_btw_codes WHERE eub_id='$id'";
    // ... execute $sql
    $result = $dbManager->executeSQL($sql);

    if ($result->rowCount() > 0){
        print json_encode( [ "BTW Code deleted" ] ) ;
    } else {
        print json_encode( [ "Error: no delete" ] ) ;
    }

}

?>