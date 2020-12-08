<?php

$p = [
    ["Susi",92],
    ["Andi",80],
    ["Toto",75],
    ["Made",65],
    ["Dewi",60]

    ];

for ($i=0; $i<count($p); $i++){
   if($p[$i][1] >= 90){
       echo $p[$i][0]." Lulus Dengan Nilai ".$p[$i][1]." Dengan Grade A+\n";
    }
   else if($p[$i][1] >= 80){
       echo $p[$i][0]." Lulus Dengan Nilai ".$p[$i][1]." Dengan Grade A\n";
    }
   else if($p[$i][1] >= 70){
       echo $p[$i][0]." Lulus Dengan Nilai ".$p[$i][1]." Dengan Grade B\n";
    }
    else if($p[$i][1] >= 60){
       echo $p[$i][0]." Lulus Dengan Nilai ".$p[$i][1]." Dengan Grade C\n";
    }
   else {
       echo $p[$i][0]." Lulus Dengan Nilai ".$p[$i][1]." Dengan Grade D\n";

   }
}


?>