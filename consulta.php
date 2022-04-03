<?php

require ('conecta.php');

$search = $_POST['search'];

$conecta = mysqli_connect( $db_host, $db_user, $db_password);
if (mysqli_connect_errno() ){
echo "Error al conectar con el servidor";
exit();
}
mysqli_select_db( $conecta, $db_name ) or die ( 'Error al conectar con la base de datos' );

mysqli_set_charset( $conecta, 'utf8' );

$query = "select * from inicio where nombre like '$search%'";

$resultado = mysqli_query( $conecta, $query );

while ( $fila = mysqli_fetch_array( $resultado, MYSQLI_ASSOC )){

echo $fila['codigo'];
echo $fila['codigo'];
echo $fila['codigo'];
echo "<br>";
}

mysqli_close($conecta);


?>