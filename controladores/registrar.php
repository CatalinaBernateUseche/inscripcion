<script src="../js/sweetalert2@10.js"></script>
.
<?php
require "../config/conexion.php";



$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];




  

$sql = "INSERT INTO carrera_atleta (documento, nombre, tipo, fecha_sys) VALUES
(".$documento." , '".$nombre ."' , '".$tipo."', now() )";



if ($conexion->query($sql))
{
    echo "<script>
            Swal.fire({
              title: 'REGISTRADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../registrar.html';
              }
            })
          </script>";

}else{
    echo "<script>
    Swal.fire({
      title: 'Error al registrar',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../registrar.html';
      }
    });
  </script>";
}
