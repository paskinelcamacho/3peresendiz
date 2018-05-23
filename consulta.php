<?php
include 'conexion.php';
 
$conn = conectar();

//Declaraciòn de variable para control de errores con los formularios
$err = 0;

if($conn){
        echo 'conectado';
	function listarPersonas( $conexion )
    {
        $sql = "SELECT * FROM usuarios";
        $ok = true;
        // Ejecutar la consulta:
         $rs = pg_query( $conexion, $sql );
        if( $rs )
        {
            // Obtener el número de filas:
             if( pg_num_rows($rs) > 0 )
            {
                echo "<p/>LISTADO DE PERSONAS<br/>";
                echo "===================<p />";
                // Recorrer el resource y mostrar los datos:
                 while( $obj = pg_fetch_object($rs) )
                     echo $obj->id." - ".$obj->nombre."<br />";
            }

} else {
        echo 'error en la conexion';
}
include 'conexion.php';
 



/*   function listarPersonas( $conexion )
    {
        $sql = "SELECT * FROM usuarios";
        $ok = true;
        // Ejecutar la consulta:
         $rs = pg_query( $conexion, $sql );
        if( $rs )
        {
            // Obtener el número de filas:
             if( pg_num_rows($rs) > 0 )
            {
                echo "<p/>LISTADO DE PERSONAS<br/>";
                echo "===================<p />";
                // Recorrer el resource y mostrar los datos:
                 while( $obj = pg_fetch_object($rs) )
                     echo $obj->id." - ".$obj->nombre."<br />";
            }
            else
                echo "<p>No se encontraron personas</p>";
        }
        else
            $ok = false;
        return $ok;
    }
*/
?>
