<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"Taak02" ?></title>
</head>
<body>
    <?php 

   $array = [
       ['vak' => 'Vak', 'cijfer' => 'Cijfer'],
       ['vak' => 'PHP', 'cijfer' => '7.2'],
       ['vak' => 'Engels', 'cijfer' => '7.0'],
       ['vak' => 'Nederlands', 'cijfer' => '6.5'],
       ['vak' => 'Veilig Programmeren', 'cijfer' => '8.0']
   ];
   echo "<table class=table border=6px height=250px width=40%>";
   for($i=0; $i<count($array); $i++){
      maakRij($array[$i]['vak'], $array[$i]['cijfer']);
   }

   echo "</table>";


   function maakRij($key,$value){
       echo "<tr>
       <td>$key</td>
       <td>$value</td>
       </tr>";
   }
   
echo "</table>";
?>
</body>
</html>