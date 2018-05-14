<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

<?PHP
$serverName = "tech.tradeit.mx";
$connectionInfo = array( "Database"=>"Tradeit_Config", "UID"=>"rafael.martinez", "PWD"=>"R4fa3lMtz");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

$contacto = $_POST['contacto'];
$cliente = $_POST['cliente'];
$rb1 = $_POST['Uno'];
$rb2 = $_POST['Dos'];
$rb3 = $_POST['Tres'];
$rb4 = $_POST['Cuatro'];
$rb5 = $_POST['Cinco'];
$rb6 = $_POST['Seis'];
$rb7 = $_POST['Siete'];
$rb8 = $_POST['Ocho'];
$rb9 = $_POST['Nueve'];
$rb10 = $_POST['Diez'];
$rbcom = $_POST['Comentarios'];

	$sql = "INSERT INTO cuestionario (nomcontacto,cliente,uno, dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,comentarios,fechadecreacion) 
	VALUES ('$contacto','$cliente','$rb1','$rb2','$rb3','$rb4','$rb5','$rb6','$rb7','$rb8','$rb9','$rb10','$rbcom', getdate())";

	$qty = 0; $id = 0;
$stmt = sqlsrv_prepare( $conn, $sql, array( $qty, $id));
if( !$stmt ) {
    die( print_r( sqlsrv_errors(), true));
}else{
	
	header("Status: 301 Moved Permanently");
	header("Location: http://viewreport.tradeit.mx/sitio/".$cliente);

}
$orders = array( 1=>10);
foreach( $orders as $id => $qty) {
    // Because $id and $qty are bound to $stmt1, their updated
    // values are used with each execution of the statement. 
    if( sqlsrv_execute( $stmt ) === false ) {
          die( print_r( sqlsrv_errors(), true));
    }
}
?>