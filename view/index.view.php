<!doctype html>
<html lang="lt">
   <head>
       <meta charset="UTF-8">
       <title>UŽDUOTIS</title>
       <link rel="stylesheet" href="style.css">
   </head>
   <body>
   <h2>UŽDUOTIS</h2>
   <ul>
       <table>
           <tr>
               <th>Klasė</th>
               <th>Kodas</th>
               <th>Vardas</th>
               <th>Pavardė</th>
               <th>Kontrolinių darbų vidurkis</th>
               <th>Duomenų formavimo data</th>
           </tr>
       <?php foreach($data as $key => $data2):?>
            <?php foreach($data2 as $key2 => $result):?>
               <tr>
                   <?php $vidurkis = array_sum($result["grades"]) / count($result["grades"])?>

                   <td><?=$key?></td>
                   <td><?=$key2?></td>
                   <td><?=$result["name"]?></td>
                   <td><?=$result["lastname"]?></td>
                   <td><?=number_format($vidurkis, 2)?></td>
                   <td><?=$result["date"]?></td>
               </tr>
          <?php endforeach;?>
       <?php endforeach;?>
       </table>
   </ul>
   </body>
</html>