<script src="../js/sweetalert2@10.js"></script>
.
<?php

require "../config/conexion.php";



$documento = $_POST["documento"];
$tipo= $_POST["tipo"];




$sql = "UPDATE carrera_atleta SET tipo='".$tipo."' WHERE documento=".$documento."";



if ($conexion->query($sql))
{
    echo "<script>
            Swal.fire({
              title: 'ACTUALIZADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../actualizar.html';
              }
            });
          </script>";

}else{
    echo "<script>
    Swal.fire({
      title: 'Error al actualizar',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../actualizar.html';
      }
    });
  </script>";
}
