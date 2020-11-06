<?php
//1)consultas sql

//1.1)conexion a Base de Datos

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Crear conexion

$conn = mysqli_connect($servername, $username, $password, $dbname);

// verificar conexion 

if (!$conn) {
  die("La conexion fallo: " . mysqli_connect_error());
}else{
    echo "Conexion exitosa";
}


//-------------------------------------------------------------------------------------------------------------------------


//a)Reporte 1

$sql = "SELECT cl.id as Cedula, CONCAT(cl.primer_nombre, " ", cl.primer_apellido) AS nombre, cl.dias_mora, 
        CASE 
           WHEN cl.dias_mora between 1 and 20
           THEN 'Riesgo Bajo'
           WHEN cl.dias_mora between 21 and 35
           THEN 'Riesgo medio'
           ELSE 'Riesgo alto'
        END AS Riesgo, 
        c.Nombre as ciudad
        FROM ciudad c 
        INNER JOIN cliente cl ON c.id = cl.id_ciudad 
        ORDER BY cl.dias_mora ASC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // datos de salida de cada fila
    while($row = mysqli_fetch_assoc($result)) {
      echo "Cedula: " . $row["cedula"]. " " . " Nombre: " . $row["nombre"]. " ". "Dias en mora: ". $row["dias_mora"].
           "Nivel de Riesgo: ". $row["riesgo"]. " ". "Ciudad:". $row["ciudad"]. "<br>";
    }
} else {
    echo "0 results";
}
  
mysqli_close($conn);


//------------------------------------------------------------------------------------------------------------------------


//b)Reporte 2

$sql = "SELECT s.id, s.Nombre, cast(SUM(c.valor_poliza_iva_incl) AS NUMERIC(20,0)) AS valorTotalPagado 
       FROM sucursal s 
       INNER JOIN cotizacion c ON s.id = c.id_sucursal  
       GROUP by s.id 
       ORDER BY c.valorTotalPagado ASC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // datos de salida de cada fila
    while($row = mysqli_fetch_assoc($result)) {
      echo "Sucursal: " . $row["Nombre"]. " " . " valorTotalPagado: " . $row["valorTotalPagado"]. "<br>";
    }
} else {
    echo "0 results";
}
  
mysqli_close($conn);


//-----------------------------------------------------------------------------------------------------------------------


//c)Reporte 3

$sql = "SELECT P.CC, P.Nombre, E.Institucion, E.Fecha 
        FROM persona P 
        INNER JOIN estudios E ON P.CC = E.CC1
        where max(E.Fecha)";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // datos de salida de cada fila
    while($row = mysqli_fetch_assoc($result)) {
      echo "Cedula: " . $row["CC"]. " " . " Nombre: " . $row["nombre"]. " ". "Cargo: ". $row["cargo"].
           "Area: ". $row["area"]. " ". "Nombre Jefe:". $row["Nombre_jefe"]. "<br>";
    }
} else {
    echo "0 results";
}
  
mysqli_close($conn);


//-----------------------------------------------------------------------------------------------------------------------


//d)Reporte 4

$sql = "SELECT e.CC, e.nombre, e.cargo, e.area, (select j.nombre from empleados j where e.id_jefe = j.cc) as NombreJefe 
        FROM empleados e ;";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // datos de salida de cada fila
    while($row = mysqli_fetch_assoc($result)) {
      echo "Cedula: " . $row["CC"]. " " . " Nombre: " . $row["nombre"]. " ". "Cargo: ". $row["cargo"].
           "Area: ". $row["area"]. " ". "Nombre Jefe:". $row["Nombre_jefe"]. "<br>";
    }
} else {
    echo "0 results";
}
  
mysqli_close($conn);