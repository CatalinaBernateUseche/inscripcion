<script src="../js/sweetalert2@10.js"></script>
.
<?php

require "../config/conexion.php";


$documento= $_POST["documento"];




$sql = "DELETE FROM carrera_atleta WHERE documento='".$documento."'";


if ($conexion->query($sql))
{
    echo "<script>
            Swal.fire({
              title: 'ELIMINADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../eliminar.html';
              }
            });
          </script>";

}else{
    echo "<script>
    Swal.fire({
      title: 'Error al eliminar',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../eliminar.html';
      }
    });
  </script>";
}
