?<php
    $conexion=mysqli_connect(´localhost´,´root´,´root´,´pruebas´);

?>


<!DOCTYPE html> 
<html>

<head>

<title>Mostrar datos</title>

</head>

<body>

<br>
        <table>      
           <tr> 
              <td>nombre y apellido</td> 
              <td>nombre de la mascota</td> 
              <td>Email</td> 
              <td>mensaje</td> 
           </tr>
           <?php
           $sql="SELECT*from t_persona";
           $result=mysqli_query($conexion,$sql);
          
           while($mostrar=mysqli_fetch_array($result)){
            ?>

           <tr>
              <td><?php echo $mostrar ["nombre y apellido"] ?></td>
              <td><?php echo $mostrar ["nombre de la mascota"] ?></td>
              <td><?php echo $mostrar ["Email"] ?></td>
              <td><?php echo $mostrar ["Mensaje"] ?></td>
           </tr>   
        <?php
        }
        ?>   
        </table>

</body>
</html>


