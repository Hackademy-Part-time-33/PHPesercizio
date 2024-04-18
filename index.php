<?php


// $users = [
//  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
//  ['name' => 'Lucrezia', 'surname' => 'Romana', 'gender' => 'F'],
//  ['name' => 'Rocco', 'surname' => 'Alicchio', 'gender' => 'M'],
// ];

// foreach ($users as $user){
    
//     if($user['gender'] == 'M'  ){
        
//         echo "Buongiorno signor {$user['name']} {$user['surname']}\n";
//     }elseif( $user['gender']== 'F'){
//         echo "Buongiorno signora {$user['name']} {$user['surname']}\n";  
//     }
//     else{ echo "Buongiorno {$user['name']} {$user['surname']}\n";}

    

// }



// $numbers = [2,40,56,7,67,56,43,67,97,35];
// $sum = 0;
// $conta = 0;


// foreach ($numbers as $number ){
// if( $number % 2 == 0 ) {
//        $sum += $number;
//        $conta++;
//       }
// };

//  $media = $sum/ $conta ;

//  echo "la media è $media";

for ($i = 1; $i <= 100; $i++){
      if($i % 3 == 0 && $i % 5 ==0){
         echo "HACKADEMY \n";
      }
      else if($i % 3 == 0){
         echo "PHP \n";
      }
      else if($i % 5 == 0){
         echo "JAVASCRIPT \n";
      }
      else {
         echo $i."\n";
      }
   } 




?>